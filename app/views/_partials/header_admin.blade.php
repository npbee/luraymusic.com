<header class="page-head" id="page-head">

    <div class='page-head__contents'>
        <a href="/" class="site-logo" id="site-logo">{{ HTML::image('assets/images/logo.svg') }}></a>
        <a class="admin-logo" href="{{ URL::route('admin') }}">ADMIN</a>

        <a id="nav-toggle" class="nav-toggle nav-toggle--closed"><span class="hide">MENU</span></a>

        <ul class="nav site-nav" id="nav">
            <li><a class="tour-nav--admin" href="{{ URL::route('admin.tour.index') }}">Tour Dates</a></li><!--
            --><li><a class="images-nav--admin" href="{{ URL::route('admin.image.index') }}">IMAGES</a></li><!--
            --><li><a class="video-nav--admin" href="{{ URL::route('admin.videos.index') }}">Videos</a></li><!--
            --><li><a class="press-nav--admin" href="{{ URL::route('admin.press.index') }}">Press</a></li><!--
            --><li><a class="albums-nav--admin" href="{{ URL::route('admin.albums.index') }}">Albums</a></li><!--
            --><li><a class="logout-nav" href="{{ URL::route('admin.logout') }}">Logout</a>
        </ul>
    </div>

</header>
