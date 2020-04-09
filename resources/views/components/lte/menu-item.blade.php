<li class="nav-item @if($hasTreeView) has-treeview @if($active) menu-open @endif @endif">

    {{-- Menu Link --}}
    <a href="{{$link}}" class="nav-link @if($active) active @endif">

        {{-- Icon --}}
        <i class="nav-icon {{$menu['icon'] ?? 'far fa-circle'}}"></i>

        <p>
            {{-- Title --}}
            {{$menu['title']}}

            {{-- Treeview icon --}}
            @if($hasTreeView)
                <i class="fas fa-angle-left right"></i>
            @endif
        </p>
    </a>

    {{-- Submenus --}}
    @if($hasTreeView)
        <ul class="nav nav-treeview">
            @foreach($submenus as $submenu)
                <x-lte-menu-item :menu="$submenu"></x-lte-menu-item>
            @endforeach
        </ul>
    @endif
</li>
