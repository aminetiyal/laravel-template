<?php

namespace Aminetiyal\LaravelTemplate\Components\Lte;

use Illuminate\View\Component;

class MenuItem extends Component
{
    public $menu = [];
    public $hasTreeView = false;
    public $submenus = [];
    public $link = '';
    public $active = false;

    public function __construct($menu = [])
    {
        $this->setMenu($menu);

        $this->renderLink();

        $this->renderTreeView();

        $this->isActive();
    }

    public function setMenu(array $menu): void
    {
        if (!array_key_exists('link', $menu)) {
            $menu['link'] = [
                'type' => 'url',
                'value' => ''
            ];
        } else {
            if (!array_key_exists('type', $menu['link'])) {
                $menu['link']['type'] = 'url';
            }
            if (!array_key_exists('value', $menu['link'])) {
                $menu['link']['value'] = '';
            }
        }
        $this->menu = $menu;
    }

    public function renderLink(array $menu = null)
    {
        $external = !is_null($menu);

        $menu = $menu ?? $this->menu;

        if ($menu['link']['type'] == 'route') {
            if (is_array($menu['link']['value'])) {
                $link = route(current($menu['link']['value']), end($menu['link']['value']));
            } else {
                $link = route($menu['link']['value']);
            }
        } elseif ($menu['link']['type'] == 'url') {
            $link = url($menu['link']['value']);
        }

        if ($external) {
            return $link;
        }

        $this->link = $link;
    }

    public function renderTreeView()
    {
        $this->hasTreeView = (array_key_exists('submenus', $this->menu) && count($this->menu['submenus']) > 0);

        if ($this->hasTreeView) {
            $this->submenus = $this->menu['submenus'];
            $this->link = '';
        }
    }

    public function isActive()
    {
        $this->active = request()->fullUrl() == $this->link;

        $this->hasActiveSubmenu($this->menu);
    }

    public function hasActiveSubmenu($menu)
    {
        if (array_key_exists('submenus', $menu) && count($menu['submenus']) > 0) {
            foreach ($menu['submenus'] as $submenu) {
                if (request()->fullUrl() == $this->getLink($submenu)) {
                    $this->active = true;
                    break;
                }
                $this->hasActiveSubmenu($submenu);
            }
        }
    }

    public function getLink($menu)
    {
        if (
            array_key_exists('link', $menu) &&
            array_key_exists('value', $menu['link']) &&
            array_key_exists('type', $menu['link']) &&
            in_array($menu['link']['type'], ['url', 'route'])
        ) {
            $link = $this->renderLink($menu);
        }

        return $link ?? null;
    }

    public function render()
    {
        return view('template::lte.components._layouts.menu-item');
    }
}
