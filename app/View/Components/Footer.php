<?php

namespace App\View\Components;

use App\Models\Section;
use Illuminate\View\Component;

class Footer extends Component
{
    private $footerSections;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->footerSections = Section::whereHas('translation', function ($q) {
            $q->whereActive(true)->whereLocale(app()->getLocale());
            $q->where('active', 1);
        })
            ->whereHas('menuTypes', function ($q) {
                $q->where('menu_type_id', 1);
            })
            ->with(['translation', 'menuTypes'])
            ->orderBy('order', 'asc')->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer', [
            'footerSections' => $this->footerSections,
        ]);
    }
}
