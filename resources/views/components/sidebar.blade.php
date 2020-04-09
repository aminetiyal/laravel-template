<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{url('/')}}" class="brand-link">
        @if(config('template.brand.logo'))
            <img src="{{config('template.brand.logo')}}"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
        @endif
        <span class="brand-text font-weight-light">{{config('template.brand.name','App')}}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column
            @if(config('template.sidebar.child-indent')) nav-child-indent @endif
            @if(config('template.sidebar.small-text')) text-sm @endif" data-widget="treeview" role="menu"
                data-accordion="false">
                @foreach($menus as $menu)
                    <x-template-menu-item :menu="$menu"></x-template-menu-item>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
