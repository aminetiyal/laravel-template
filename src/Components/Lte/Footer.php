<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte;

use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('template::lte.components._layouts.footer');
    }
}
