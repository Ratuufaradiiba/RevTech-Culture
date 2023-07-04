<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $active}}</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">{{ $active }}</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here...">
        </div>
      </div>
      <ul class="navbar-nav  justify-content-end">
        @auth
        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <nav x-data="{ open: false }" class="">
            <a href="" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              <li class="">
                <x-dropdown-link href="{{ route('profile.show') }}">
                  {{ __('Profile') }}
                </x-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                  {{ __('API Tokens') }}
                </x-dropdown-link>
                @endif

                <div class="border-t border-gray-200"></div>
                <hr class="horizontal dark">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <div class="nav-item">
                    <x-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">
                      {{ __('Log Out') }}
                    </x-dropdown-link>
                  </div>
                </form>
                </a>
              </li>
            </ul>
        </li>
        @endauth
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>