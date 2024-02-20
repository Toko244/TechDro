<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Component;
use App\Models\Post;
use App\Models\Section;
use App\Repositories\Interfaces\SectionRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function __construct(private SectionRepositoryInterface $sectionRepository)
    {

    }

    /**
     * index
     *  Lists Sections
     *
     * @return void
     */
    public function index(): View
    {
        $sections = $this->sectionRepository->getAllSections();
        $post = Post::where('section_id', 2)->with('translations')->get();
        $components = Component::all();

        return view('admin.sections.list', compact('sections', 'post'));
    }

    public function create()
    {

        $sectionTypes = sectionTypes();

        $sections = Section::with('translations')->get();

        $menuTypes = menuTypes();

        return view('admin.sections.add', compact(['sectionTypes', 'sections',  'menuTypes']));
    }

    public function store(Request $request)
    {
        $values = $request->all();

        $section = $this->sectionRepository->storeSection($values);

        return redirect()->route('section.list', [app()->getLocale()]);

    }

    public function edit($id)
    {
        $sectionTypes = sectionTypes();
        $section = $this->sectionRepository->getSectionById($id);
        $sections = $section->get();
        $menuTypes = menuTypes();

        return view('admin.sections.edit', compact(['section', 'sections', 'sectionTypes', 'menuTypes']));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'type_id' => 'required',
        ]);
        $this->sectionRepository->updateSection($id, $request);

        return redirect()->route('section.list', [app()->getLocale()]);

    }

    public function arrange(Request $request)
    {
        $array = $request->input('orderArr');
        Section::rearrange($array);

        return ['error' => false];
    }

    public function destroy($id)
    {
        $this->sectionRepository->deleteSection($id);

        return redirect()->route('section.list', [app()->getLocale()]);

    }
}
