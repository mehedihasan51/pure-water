
@php
    $systemSetting = App\Models\SystemSetting::first();
@endphp


<div class="main-header">
    <div class="main-header-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">

        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav
      class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
    >
      <div class="container-fluid">
        <nav
          class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
        >
        </nav>

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

          <li class="nav-item topbar-user dropdown hidden-caret">
            <a
              class="dropdown-toggle profile-pic"
              data-bs-toggle="dropdown"
              href="#"
              aria-expanded="false"
            >
              <div class="avatar-sm">
                <img
                  src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('backend/images/default_images/user_1.jpg') }}"
                  alt="Admin Image"
                  class="avatar-img rounded-circle"
                />
              </div>
              <span class="profile-username">
                <span class="fw-bold font-medium text-base text-gray-800">{{ ucfirst(Auth::user()->firstName) . ' ' . ucfirst(Auth::user()->lastName) ?? '' }}</span>
                <span class=""><div class="font-medium text-base text-gray-800">{{ Auth::user()->firstName }}</div></span>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
              <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                  <a class="dropdown-item" href="#">My Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Account Setting</a>
                  <div class="dropdown-divider"></div>

                  {{-- <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                    <form action="{{ route('logout') }}" method="post" id="logoutForm">
                        @csrf
                    </form> --}}

                    <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                    <form action="{{ route('logout') }}" method="post" id="logoutForm">
                        @csrf
                    </form>

                </li>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
  </div>