<li class="nav-item {{ request()->routeIs($routeName) ? 'active' : null }}">
    <a href="{{ $route }}" class="nav-link">{{ $title }}</a>
</li>
