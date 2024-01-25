<div class="header-logo py-3 d-none d-lg-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <a class="navbar-brand" href="index.html"><img src="{{asset('landingpage/theme/images/RevTech-Culture.png')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>
<header class="header-top bg-grey justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 header-left col-md-6 col-auto">
                <ul class="list-inline header-socials-2 mb-0 text-center">
                    <li class="list-inline-item">
                        <a href="#"><i class="ti-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="ti-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <div class="search_toggle mobile-search d-md-block d-lg-none">
                            <input type="text" class="form-control1" placeholder="Cari..." />
                            <i class="ti-search" style="
                                        position: absolute;
                                        top: 50%;
                                        transform: translateY(-50%);
                                    "></i>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8 text-center col-md-8 col-5">
                <nav class="navbar navbar-expand-lg navigation">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul id="menu" class="menu navbar-nav mx-auto">
                            <li class="nav-item ">
                                <a href="/" class="nav-link {{ $active === 'Home' ? 'active' : '' }} ">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('culturepage')}}" class="nav-link  {{ $active === 'Culture' ? 'active' : '' }} ">Culture</a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('kategori') }}" class="nav-link {{ $active === 'Kategori' ? 'active' : '' }}">Kategori</a>
                            </li>
                            <li class="list-inline-item separator"></li>
                            @if (Route::has('login'))

                            @auth

                            <li class="nav-item dropdown">
                                <nav x-data="{ open: false }" class="">
                                    <a href="" class="nav-link">{{ Auth::user()->name }}</a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="nav-link" href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </a>

                                        @if (Auth::user()->role == 'admin')
                                        <a class="nav-link" href="{{ route('redirect') }}">
                                            Dashboard Admin
                                        </a>
                                        @endif

                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <a class="nav-link" href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </a>
                                        @endif

                                        <div class="border-t border-gray-200"></div>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <div class="nav-item">
                                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">
                                                    {{ __('Log Out') }}
                                                </a>
                                            </div>
                                        </form>

                                    </div>
                                </nav>
                            </li>

                            @else
                            <li class="nav-item ">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                            @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
