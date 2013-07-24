<header class="page-head" id="page-head">

    <div class='page-head__contents'>
        <a href="/" class="site-logo" id="site-logo">{{ HTML::image('assets/images/logo.svg') }}></a>
        <a class="admin-logo" href="{{ URL::route('admin') }}">ADMIN</a>

        <a id="nav-toggle" class="nav-toggle nav-toggle--closed"><span class="hide">MENU</span></a>

        <ul class="nav site-nav" id="nav">
            <li><a class="tour-nav--admin" href="{{ URL::route('admin.tour.index') }}">Tour Dates</a></li><!--
            --><li><a class="media-nav" href="{{ URL::route('media') }}">Pics</a></li><!--
            --><li><a class="media-nav" href="{{ URL::route('media') }}">Videos</a></li>
        </ul>
    </div>

</header>