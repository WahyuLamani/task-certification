@auth
<ul class="navbar-nav me-auto">
    @foreach ($navItem as $nav)
        <li class="nav-item">
            <a class="nav-link {{request()->is($nav['directlink']) ? 'active' : ''}}" aria-current="page" href="{{$nav['directlink']}}">{{$nav['navName']}}</a>
        </li>
    @endforeach
</ul>
@endauth