<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte\Field;

use Illuminate\View\Component;
use \Illuminate\Support\Str;

class Input extends Component
{
    public $type;
    public $name;
    public $label;
    public $value;
    public $class;
    public $readonly;
    public $required;
    public $checked;
    public $icon;

    public function __construct(
        $type = 'text',
        $name = null,
        $label = null,
        $value = null,
        $class = null,
        $readonly = null,
        $required = false,
        $checked = false,
        $icon = null
    )
    {
        $this->type = $type;
        $this->name = $name ?? str_replace('-', '_', Str::kebab($label));
        $this->label = $label;
        $this->value = ($type == 'password') ? '' : old($this->name, ($value ?? ((isset($model)) ? $model->{$this->name} : '')));
        $this->class = $class;
        $this->readonly = $readonly;
        $this->required = $required;
        $this->checked = $checked;
        $this->icon = $icon;
    }


    public function render()
    {
        return view('template::lte.components._fields.input');
    }
}
