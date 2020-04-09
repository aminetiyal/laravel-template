<?php

namespace Aminetiyal\LaravelTemplate\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('template::components.footer');
    }
}
