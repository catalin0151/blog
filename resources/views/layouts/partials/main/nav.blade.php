<div class="ts-menu row justify-content-end">
    <div class="col-auto">
        @auth
            <a href="{{ url('/home') }}">Home</a>
            <a class="" href="{{ url('/logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>
</div>
