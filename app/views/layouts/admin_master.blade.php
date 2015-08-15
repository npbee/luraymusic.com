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

    {{ HTML::script('assets/js/min/vendor.js') }}
    {{ HTML::script('assets/js/min/admin.vendor.js') }}
    {{ HTML::script('assets/js/min/main.js') }}
    {{ HTML::script('assets/js/min/admin.js') }}

    </body>
</html>
