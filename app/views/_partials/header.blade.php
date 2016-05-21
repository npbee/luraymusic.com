<header class="page-head" id="page-head">

    <nav>
        <div class="nav__left">
            <a href="/" data-page="{{ CurrentPage::get() }}" class="site-logo" id="site-logo">{{ HTML::image('assets/images/logo.svg') }}</a><!--
            --><a id="nav-toggle" class="nav-toggle nav-toggle--closed" href="{{ URL::route('menu') }}"></a>
        </div><!--

        --><div class="nav__right">
            <ul class="nav site-nav" id="nav">
                <li><a class="media-nav" href="{{ URL::route('media') }}">Media</a></li><!--
                --><li><a class="albums-nav" href="{{ URL::route('albums') }}">Albums</a></li><!--
                --><li><a class="tour-nav" href="{{ URL::route('tour') }}">Tour</a></li><!--
                --><li><a class="contact-nav" href="{{ URL::route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>

</header>
