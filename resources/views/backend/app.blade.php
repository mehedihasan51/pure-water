<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
      <!--   Core JS Files   -->
      @include('backend/partials/styles')
  </head>
  <body>
    <div class="wrapper">
       <!-- Sidebar -->
       @include('backend/partials/sidebar')
       <!-- End Sidebar -->
       @include('backend/partials/header')

      <div class="main-panel">

        @yield('content')
        
        @include('backend/partials/footer')

      </div>

      <!-- Custom template | don't include it in your project! -->
      @include('backend/partials/theme-settings')
      {{-- End Custom template --}}

      @include('backend/partials/scripts')
    </div>

  </body>
</html>
