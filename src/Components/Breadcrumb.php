<?php

namespace Aminetiyal\LaravelTemplate\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /* array([ 'title' => 'url']) */
    public $items = [];

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function render()
    {
        return view('template::components.breadcrumb');
    }
}
