<div id="menu-classic">
    <div class="menu-holder">
        <ul>
            <li class="submenu">
                <a href="/montanha">Home</a>
            </li>
            <li class="submenu">
                <a href="/gunung">Gunung</a>
            </li>
            <li>
                <a href="/forum" class="">Forum</a>
            </li>
        
            <li class="submenu">
                <a href="/blog">Artikel</a>
            </li>
            
            <li>
                <a href="{{ auth()->check() ? '#' : '/login' }}" @if(auth()->check())onclick="document.getElementById('logout').submit()"@endif>{{ auth()->check() ? 'Logout' : 'Login' }}</a>
            </li>
            <!-- Search Icon -->
            <li class="search">
                <i class="icon ion-ios-search"></i>
            </li>
        </ul>
    </div>
</div>
<form id="logout" action="{{ route('logout') }}" method="post">
    @csrf
</form>
