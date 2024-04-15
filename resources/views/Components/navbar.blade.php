<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link {{request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    @if (!isset(Auth::user()->certificate->uploaded))
        <li class="nav-item">
            <a class="nav-link {{request()->is('sertifikasi') ? 'active' : ''}}" aria-current="page"
                href="{{route('sertifikasi')}}">Sertifikasi</a>
        </li>
    @endif
</ul>