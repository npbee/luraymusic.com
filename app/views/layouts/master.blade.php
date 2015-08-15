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

    {{ HTML::script('assets/js/min/vendor.js') }}
    {{ HTML::script('assets/js/min/main.js') }}

    </body>
</html>
