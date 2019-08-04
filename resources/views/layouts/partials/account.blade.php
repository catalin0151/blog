@auth
    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle"
                type="button"
                id="user-menu-button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
        >
            {{Auth::user()->name}}
        </button>
        <div class="dropdown-menu"
             aria-labelledby="user-menu-button"
        >
            <a class="dropdown-item" href="#">Account</a>
            <a class="dropdown-item" href="{{route('users.index')}}">Dashboard</a>
            <a class="dropdown-item" href="{{route('logout')}}"
               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                Logout
            </a>

        </div>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@else
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
    </ul>

@endauth