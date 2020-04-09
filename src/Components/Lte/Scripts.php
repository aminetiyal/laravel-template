<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte;

use Illuminate\View\Component;

class Scripts extends Component
{
    public $scripts = [];

    public function __construct()
    {
        $this->scripts = config('template.assets.scripts');
    }

    public function render()
    {
        return view('template::lte.components._layouts.scripts');
    }
}
