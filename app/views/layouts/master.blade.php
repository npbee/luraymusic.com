<!doctype html>
<html class="no-js">
    @include('_partials.head')

    <body class="{{ $bodyClass }}">

    <div class="wrapper" id="wrapper">

        @include('_partials.header')

        <section class="main" id="main">

            @yield('content')


        </section>

    </div>

    @yield('footer')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    {{ HTML::script('assets/js/vendor/modernizr.js') }}
    {{ HTML::script('assets/js/vendor/soundcloud.player.api.js') }}
    {{ HTML::script('assets/js/vendor/sc-player-ck.js') }}
    {{ HTML::script('assets/js/vendor/jquery.colorbox-min.js') }}
    {{ HTML::script('assets/js/main-ck.js') }}

    </body>
</html>