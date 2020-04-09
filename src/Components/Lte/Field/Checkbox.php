<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte\Field;

use Illuminate\View\Component;
use \Illuminate\Support\Str;

class Checkbox extends Component
{
    public $id;
    public $name;
    public $label;
    public $value;
    public $required;
    public $checked;

    public function __construct(
        $id = null,
        $name = null,
        $label = null,
        $value = null,
        $required = false,
        $checked = false
    )
    {
        $this->id = $id ?? 'field_checkbox_'.rand(100000, 99999);
        $this->name = $name ?? str_replace('-', '_', Str::kebab($label));
        $this->label = $label;
        $this->value = $value;
        $this->required = $required;
        $this->checked = $checked;
    }

    public function render()
    {
        return view('template::lte.components._fields.checkbox');
    }
}
