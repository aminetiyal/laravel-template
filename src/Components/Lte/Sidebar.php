<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $menus;

    public function __construct()
    {
        $this->menus = config('template.menu-items', []);
    }

    public function render()
    {
        return view('template::components.lte._layouts.sidebar');
    }
}
