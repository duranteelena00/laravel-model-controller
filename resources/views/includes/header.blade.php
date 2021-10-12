<nav>
    <ul>        
        <li>
            <a class="nav-link {{ request()->routeIs('movies.index') ? active : '' }}" href="{{ route('movies.index') }}">Movies</a>
        </li>
    </ul>
</nav>