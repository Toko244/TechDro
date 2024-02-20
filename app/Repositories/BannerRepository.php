<?php

namespace App\Repositories;

use App\Models\Banner;
use App\Models\BannerFile;
use App\Models\BannerTranslation;
use App\Repositories\Interfaces\BannerRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class BannerRepository implements BannerRepositoryInterface
{
    public function getAllBanners($type)
    {
        $type = collect(bannerTypes())->where('id', $type)->first();
        if (isset($type['type']) && $type['type'] == 2) {
            $banner = Banner::where('type_id', $type['id'])->first();
            if (isset($banner) && $banner !== null && ! empty($banner)) {
                return Redirect::route('banner.edit', [app()->getLocale(), $banner->id]);
            }

            return Redirect::route('banner.create', [app()->getLocale(), $type['id']]);
        }

        $banners = Banner::where('type_id', $type['id'])->whereHas('translation')->with('translation')->orderBy('date', 'desc')->paginate(9);

        return $banners;
    }

    public function createBanner($type)
    {
        $type = collect(bannerTypes())->where('id', $type)->first();

        return $type;
    }

    public function storeBanner($type, Request $request)
    {
        $type = collect(bannerTypes())->where('id', $type)->first();
        $values = $request->all();
        $banner = null;
        $this->storeBanner($values, $type, $banner);

        return $type;
    }

    public function getBannerById($banner)
    {
        $banner = Banner::where('id', $banner)->with(['translations', 'files'])->first();
        $type = collect(bannerTypes())->where('id', $banner->type_id)->first();

        return ['banner' => $banner, 'type' => $type];
    }

    public function updateBanner($banner, Request $request)
    {
        $values = $request->all();
        if (isset($values['icon']) && ($values['icon'] != null)) {
            $name = time().'.'.$values['icon']->extension();
            $values['icon']->move(config('config.icon_path'), $name);
            $values['icon'] = '';
            $values['icon'] = $name;
        }

        $banner = Banner::where('id', $banner)->with(['translations', 'files'])->first();
        $type = collect(bannerTypes())->where('id', $banner->type_id)->first();
        $this->storeBanner($values, $type, $banner);

        return $type;
    }

    public function deleteBanner($banner)
    {
        $banner = Banner::find($banner);
        $files = BannerFile::where('banner_id', $banner->id)->get();
        foreach ($files as $file) {
            if (File::exists(config('config.image_path').$file->file)) {
                File::delete(config('config.image_path').$file->file);
            }
            if (File::exists(config('config.image_path').'thumb/'.$file->file)) {
                File::delete(config('config.image_path').'thumb/'.$file->file);
            }

            $file->delete();
        }

        BannerTranslation::where('banner_id', $banner->id)->delete();
        Banner::where('id', $banner->id)->delete();
        BannerFile::where('banner_id', $banner->id)->delete();

        $banner->delete();

        return $banner;
    }
}
