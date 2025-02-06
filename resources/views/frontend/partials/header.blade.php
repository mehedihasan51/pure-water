

<header class="common-top-header">
  <div class="bi-header-routes">
    <a class="bi-route {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
    <a class="bi-route {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
    <a class="bi-route {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact us</a>
</div>
    <a href="{{route('user.login')}}" class="auth-btn"> Log In </a>
      <div class="header-for-mobile">
        <div class="bi-header-toggle-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="#0b57da"
            d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L96 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
          </svg>
        </div>
      </div>
  </header>

     <!-- mobile header -->
     <button id="open-mobile-header" class="mobile-header">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M12 4.5H3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12 9.5H3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M21 14.5H3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M21 19.5H3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
     </button>
     <div class="mobile-header-routes">
      <a class="bi-route active" href="{{route('home')}}">Home</a>
      <a class="bi-route" href="{{route('about')}}">About</a>
      <a class="bi-route" href="{{route('contact')}}">Contact us</a>
      <a class="bi-route" href="">Log In</a>
    </div>