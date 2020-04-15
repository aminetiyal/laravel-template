<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte\Field;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Textarea extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $label;
    public $cols;
    public $rows;
    public $value;
    public $class;
    public $readonly;
    public $required;
    public $icon;

    public function __construct(
        $type = 'text',
        $name = null,
        $placeholder = null,
        $label = null,
        $cols = null,
        $rows = null,
        $value = null,
        $class = null,
        $readonly = null,
        $required = false,
        $icon = null
    )
    {
        $this->type = $type;
        $this->name = $name ?? str_replace('-', '_', Str::kebab($label));
        $this->placeholder = $placeholder ?? (!$name ? str_replace('-', '_', Str::kebab($label)) : '');
        $this->label = $label;
        $this->cols = $cols;
        $this->rows = $rows;
        $this->value = old($this->name, ($value ?? ''));
        $this->class = $class;
        $this->readonly = $readonly;
        $this->required = $required;
        $this->icon = $icon;
    }


    public function render()
    {
        return view('template::lte.components._fields.textarea');
    }
}
