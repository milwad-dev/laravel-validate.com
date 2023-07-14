<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{{ config('app.name') }} - @yield('title')</title>

        @include('layouts.css')
    </head>
    <body data-scroll-animation="true">
        @include('layouts.preloader')
        <div class="click_capture"></div>
        <div class="body_wrapper">
            @include('layouts.nav')

            @yield('banner-area')
            @yield('content')

            @include('layouts.footer')
        </div>

        <!-- Back to top button -->
        <a id="back-to-top" title="Back to Top"></a>

        @include('layouts.js')
    </body>
</html>
