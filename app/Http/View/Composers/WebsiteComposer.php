<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class WebsiteComposer
{
    public function __construct()
    {
    }

    public function compose(View $view)
    {
        $view->with([]);
    }
}