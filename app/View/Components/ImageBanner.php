<?php

namespace App\View\Components;

use App\Models\Post;
use App\Models\Section;
use Illuminate\View\Component;

class ImageBanner extends Component
{
    public $section;

    public $components;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sectionId)
    {
        $this->section = Section::where('id', $sectionId)->with('translation')->first();
        $this->components = Post::where('section_id', $sectionId)->whereHas('translation', function ($q) {
            $q->whereActive(true)->whereLocale(app()->getLocale());
        })->with('translation')->orderBy('date', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image-banner')->with([
            'section' => $this->section,
            'components' => $this->components,
        ]);
    }
}
