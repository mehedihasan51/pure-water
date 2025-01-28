@php
    $systemSetting = App\Models\SystemSetting::first();
@endphp

<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <div class="logo-header" data-background-color="dark">
      <a href="{{ route('dashboard') }}" class="logo text-white">
        <span class="logo-sm">
            <img src="{{ asset($systemSetting->logo ?: 'frontend/images/logo.png') }}" alt="Logo"
                style="height: 50px; width: auto;">
        </span>
    </a>
    
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
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}">
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
          </a>
      </li>
        <li class="nav-item {{ request()->routeIs('clients-feedback.index') ? 'active' : '' }}">
          <a href="{{ route('clients-feedback.index') }}" class="sub-item">
            <i class="fa fa-commenting" aria-hidden="true"></i>
            <p>Clients Feedback</p>
          </a>
        </li>
        <li class="nav-item {{ request()->routeIs('products.index') ? 'active' : '' }}">
          <a href="{{ route('products.index') }}" class="sub-item">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <p>Products</p>
          </a>
        </li>
        <hr />
        <li class="nav-item {{ request()->routeIs(['profile.setting', 'system.index', 'mail.setting', 'integration.setting','social.index']) ? 'active' : '' }}">
          <a data-bs-toggle="collapse" href="#submenu" 
             class="{{ request()->routeIs(['profile.setting', 'system.index', 'mail.setting', 'integration.setting','social.index']) ? 'collapsed show' : '' }}">
            <i class="fas fa-cog"></i>
            <p>Settings</p>
            <span class="caret"></span>
          </a>
        
          <div class="collapse {{ request()->routeIs(['profile.setting', 'system.index', 'mail.setting', 'integration.setting','social.index']) ? 'show' : '' }}" id="submenu">
            <ul class="nav nav-collapse">
              <li class="{{ request()->routeIs('profile.setting') ? 'active' : '' }}">
                <a href="{{ route('profile.setting') }}">
                  <span class="sub-item">Profile Settings</span>
                </a>
              </li>
              <li class="{{ request()->routeIs('system.index') ? 'active' : '' }}">
                <a href="{{ route('system.index') }}">
                  <span class="sub-item">System Settings</span>
                </a>
              </li>
              <li class="{{ request()->routeIs('mail.setting') ? 'active' : '' }}">
                <a href="{{ route('mail.setting') }}">
                  <span class="sub-item">SMTP Server</span>
                </a>
              </li>
              <li class="{{ request()->routeIs('integration.setting') ? 'active' : '' }}">
                <a href="{{ route('integration.setting') }}">
                  <span class="sub-item">Integration Settings</span>
                </a>
              </li>
              <li class="{{ request()->routeIs('social.index') ? 'active' : '' }}">
                <a href="{{ route('social.index') }}">
                  <span class="sub-item">Social Media Settings</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        
      </ul>
    </div>
  </div>
</div>



