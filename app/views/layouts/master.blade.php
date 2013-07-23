<!doctype html>
<html>
    @include('partials.head')

    <body class="{{ $bodyClass }}">

    <div class="wrapper" id="wrapper">

        @include('partials.header')

        <section class="main" id="main">

            @yield('content')


        </section>

    </div>

    @yield('footer')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script async src="assets/js/vendor/soundcloud.player.api.js"></script>
    <script async src="assets/js/vendor/sc-player.js"></script>
    <script async src="assets/js/main.js"></script>

    </body>
</html>