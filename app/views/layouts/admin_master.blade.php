<!doctype html>
<html>
    @include('_partials.head_admin')

    <body class="admin {{ $bodyClass }}">

    <div class="wrapper" id="wrapper">

        @include('_partials.header_admin')

        <div class="sub-nav">
            @yield('sub-header')
        </div>

        <section class="main" id="main">

            @yield('content')


        </section>

    </div>

    @yield('footer')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    {{ HTML::script('assets/js/vendor/jquery.colorbox-min.js') }}
    {{ HTML::script('assets/js/vendor/datepicker.js') }}
    {{ HTML::script('assets/js/vendor/bootstrap-fileupload.min.js') }}
    {{ HTML::script('assets/js/main.js') }}
    {{ HTML::script('assets/js/main-admin.js') }}

    </body>
</html>