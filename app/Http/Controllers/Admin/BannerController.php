<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\BannerFile;
use App\Models\BannerTranslation;
use App\Repositories\Interfaces\BannerRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function __construct(private BannerRepositoryInterface $bannerRepository)
    {

    }

    public function index($type)
    {
        $this->bannerRepository->getAllBanners($type);

        return view('admin.banners.list', compact('type', 'banners'));
    }

    public function create($type)
    {
        $this->bannerRepository->createBanner($type);

        return view('admin.banners.add', compact('type'));
    }

    public function store($type, Request $request)
    {
        $this->bannerRepository->storeBanner($type, $request);

        return Redirect::route('banner.list', [app()->getLocale(), $type['id']]);
    }

    public function edit($banner)
    {
        $banner = $this->bannerRepository->getBannerById($banner);

        $type = collect(bannerTypes())->where('id', $banner->type_id)->first();

        return view('admin.banners.edit', compact('type', 'banner'));
    }

    public function update($banner, Request $request)
    {

        $this->bannerRepository->updateBanner($banner, $request);

        return Redirect::route('banner.list', [app()->getLocale(), $type['id']]);
    }

    public function destroy($banner)
    {

        $this->bannerRepository->deleteBanner($banner);
        $type = collect(bannerTypes())->where('id', $banner->type_id)->first();

        return Redirect::route('banner.list', [app()->getLocale(), $type['id']]);

    }

    protected function storeBanner($values, $type, $banner)
    {
        $values['type_id'] = $type['id'];
        $values['author_id'] = auth()->user()->id;
        $bannerFillable = (new Banner)->getFillable();
        $bannerTransFillable = (new BannerTranslation)->getFillable();
        // dd($count);
        Validator::validate($values, genValidation($type['fields']['nonTrans']));

        $values['additional'] = getAdditional($values, array_diff(array_keys($type['fields']['nonTrans']), $bannerFillable));

        foreach (locales() as $locale) {

            if (isset($values[$locale]['files']) && $values[$locale]['files'] !== null) {
                foreach ($values[$locale]['files'] as $key => $files) {
                    if (array_key_exists('same', $values[$locale]['files'][$key])) {
                        foreach (config('app.locales') as $lang) {
                            if ($lang != $locale) {
                                if (! array_key_exists($key, $values[$lang])) {
                                    $values[$lang][$key] = [];
                                }
                                foreach ($values[$locale]['files'][$key]['file'] as $k => $value) {
                                    $values[$lang][$key][] = [
                                        'file' => $value,
                                        'name' => $files['desc'][$k],
                                    ];
                                }
                            }
                        }
                    }
                    $values[$locale][$key] = [];
                    foreach ($values[$locale]['files'][$key]['file'] as $k => $value) {
                        $values[$locale][$key][] = [
                            'file' => $value,
                            'name' => $files['desc'][$k],
                        ];
                    }

                }
            }

            if (isset($values[$locale]['active']) && $values[$locale]['active'] == 1) {
                if (isset($values[$locale]['title'])) {
                    $values[$locale]['slug'] = str_replace(' ', '', $values[$locale]['title']);
                } else {
                    $values[$locale]['slug'] = str_replace(' ', '', $values[$locale]['name']);
                }

                Validator::validate($values[$locale], genValidation($type['fields']['trans']));

                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($type['fields']['trans']), $bannerTransFillable));

            }
        }
        if (isset($banner) && $banner !== null) {

            $allOldFiles = BannerFile::where('banner_id', $banner->id)->get();

            foreach ($allOldFiles as $key => $fil) {
                if (isset($values['old_file']) && count($values['old_file']) > 0) {
                    if (! in_array($fil->id, array_keys($values['old_file']))) {
                        $fil->delete();
                    }
                } else {
                    $fil->delete();
                }

            }
            Banner::find($banner->id)->update($values);

        } else {
            $banner = Banner::create($values);
        }

        if (isset($values['files']) && count($values['files']) > 0) {
            foreach ($values['files'] as $key => $files) {
                foreach ($files['file'] as $k => $file) {
                    $bannerFile = new BannerFile;
                    $bannerFile->file = $file;
                    $bannerFile->banner_id = $banner->id;
                    $bannerFile->save();
                }
            }
        }
    }
}
