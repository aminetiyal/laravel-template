<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte\Field;

use Illuminate\View\Component;

class Password extends Component
{
    public $name;
    public $label;
    public $class;
    public $required;
    public $icon;

    public function __construct(
        $name = null,
        $label = null,
        $class = null,
        $required = false,
        $icon = null
    )
    {
        $this->label = $label;
        $this->setName($name);
        $this->class = $class;
        $this->required = $required;
        $this->icon = $icon;
    }

    public function setName($name): void
    {
        if ($this->label == 'Confirmation') {
            $this->name = $name ?? 'password_confirmation';
        } else {
            $this->name = $name ?? 'password';
        }
    }

    public function render()
    {
        return view('template::lte.components._fields.password');
    }
}
