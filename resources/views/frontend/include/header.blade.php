<input type="hidden" id="base_url" name="base_url" value="{{ asset('assets') }}/">
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets') }}/img/logo.png" alt="Luggage hub"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">All Cities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">How it works</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link p180" href="{{ route('login') }}">Become
                            a partner</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item"><a class="nav-link login" href="#">Hello !
                                    {{ Auth::user()->name }}</a></li>
                            <li class="nav-item"><a class="btn btn-primary" href="{{ route('logout') }}">Logout
                                    →</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link login" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="btn btn-primary" href="{{ route('register') }}">Sing
                                        up →</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
