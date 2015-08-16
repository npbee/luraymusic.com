<header class="page-head" id="page-head">

    <nav class="admin-nav">
        <div class="nav__left">
            <a href="/" data-page="{{ CurrentPage::get() }}" class="site-logo" id="site-logo">{{ HTML::image('assets/images/logo.svg') }}</a><!--
            --><a id="nav-toggle" class="nav-toggle nav-toggle--closed"></a>
        </div><!--
        
        --><div class="nav__right">
            <ul class="nav site-nav" id="nav">
                <li><a class="tour-nav--admin" href="{{ URL::route('admin.tour.index') }}">Tour Dates</a></li><!--
                --><li><a class="images-nav--admin" href="{{ URL::route('admin.image.index') }}">IMAGES</a></li><!--
                --><li><a class="video-nav--admin" href="{{ URL::route('admin.videos.index') }}">Videos</a></li><!--
                --><li><a class="press-nav--admin" href="{{ URL::route('admin.press.index') }}">Press</a></li><!--
                --><li><a class="albums-nav--admin" href="{{ URL::route('admin.albums.index') }}">Albums</a></li><!--
                --><li><a class="logout-nav" href="{{ URL::route('admin.logout') }}">Logout</a>
            </ul>
        </div>
    </nav>

</header>

<div class="ribbon">Admin</div>
