<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title')</title>
    <!-- ==== Favicon ==== -->
    <link rel="icon" href="assets/images/favicon.png" type="image/png" />

    @include('frontend.partials.styles')
</head>

<body>
        <!-- header area starts -->
        @include('frontend.partials.dashboard_header')
        <!-- header area starts -->

     <!-- main area starts -->
     <main>
        <!-- banner section starts -->

        @yield('content')
        <!-- Service And Filter Changes section End -->


     </main>
     <!-- main area ends -->

    <!-- footer area starts -->
    @include('frontend.partials.footer')
    <!-- footer area ends -->


  <!-- Javascript Links -->
    @include('frontend.partials.scripts')


</body>

</html>