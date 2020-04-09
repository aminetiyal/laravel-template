<?php

namespace Aminetiyal\LaravelTemplate\Components;

use Illuminate\View\Component;

class Styles extends Component
{
    public $fonts = [];
    public $styles = [];

    public function __construct()
    {
        $this->fonts = config('template.assets.fonts');
        $this->styles = config('template.assets.styles');
    }

    public function render()
    {
        return view('template::components.styles');
    }
}
