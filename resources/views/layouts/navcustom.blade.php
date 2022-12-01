
<header class="nav nav-pills justify-content-end ">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


        <div>


        @if (Route::has('login'))
            <div>
                @auth
        <a href="{{ route('logout') }}" class="btn btn-secondary input-group-btn text-white">Log Out </a>
        @else
        <a href="{{ route('login') }}" class="btn btn-primary input-group-btn">Login</a>

            @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn btn-secondary input-group-btn">Register</a>
            @endif
        @endauth
        </div>
        @endif

        </div>

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</header>


