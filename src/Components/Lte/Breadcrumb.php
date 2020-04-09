<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte;

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
        return view('template::lte.components._layouts.breadcrumb');
    }
}
