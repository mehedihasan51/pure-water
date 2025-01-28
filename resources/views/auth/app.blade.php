<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <title>@yield('title')</title>

  @include('auth.partials.styles')
</head>

<body>


    <!-- ===================== Sign In Page Start Hare ============================= -->
     <main>

        @yield('content')
     </main>
    <!-- ===================== Sign In Page Start Hare ============================= -->


  <!-- Javascript Links -->
  @include('auth.partials.scripts')

</body>

</html>