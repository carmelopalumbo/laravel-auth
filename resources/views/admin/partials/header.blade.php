<header>
    <nav class="navbar navbar-expand navbar-light bg-dark shadow-sm">
        <div class="container-fluid mx-1">
            <a class="navbar-brand d-flex align-items-center text-white" href="{{ url('/') }}">
                <div class="fw-bold">
                    MY PORTFOLIO
                </div>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-white fs-4" href="{{ url('/') }}"><i
                                class="fa-solid fa-globe"></i></a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white fs-4" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white fs-4" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
