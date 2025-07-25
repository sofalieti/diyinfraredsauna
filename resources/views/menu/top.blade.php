<ul class="navbar-nav nav-fill w-100">
    @foreach($g_top_menu as $key => $menu)
    <li class="nav-item {{$menu->childs()->count() ? 'dropdown' : ''}}">
        <a href="{{$menu->href}}" {{$menu->target_blank ? 'target="_blank"' : ''}} class="nav-link {{$menu->childs()->count() ? 'dropdown-toggle' : ''}}">{{$menu->name}}</a>
        @if($menu->childs()->count())
        <span class="dropdown-open d-block d-lg-none"><i class="fas fa-chevron-right"></i></span>
        <div class="dropdown-menu">                  
            @foreach($menu->childs as $child)
            <a href="{{$child->href}}" {{$child->target_blank ? 'target="_blank"' : ''}} class="dropdown-item">{{$child->name}}</a>
            @endforeach
        </div>
        @endif
    </li>
    @endforeach
</ul>