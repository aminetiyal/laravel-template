@php($profileEnabled = config('template.routes.profile.enabled', false))
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        @auth()
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <span class="d-inline">{{auth()->user()->name}}</span>
                </a>
                <ul class="dropdown-menu @if($profileEnabled) dropdown-menu-lg @endif dropdown-menu-right" @if(!$profileEnabled) style="width: 150px" @endif>
                    <li class="user-footer">
                        @if($profileEnabled)
                            <a href="{{route(config('template.routes.profile.index','profile.index'))}}" class="btn btn-default btn-flat" style="width: 45%">@lang('template::template.profile')</a>
                        @endif
                            <a class="btn btn-default btn-flat float-right" href="#" style="width: @if($profileEnabled) 45% @else 100% @endif"
                           data-toggle="tooltip" data-placement="bottom" title="@lang('template::template.log_out')"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-power-off"></i>
                        </a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endauth
    </ul>
</nav>
