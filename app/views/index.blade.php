@extends('layouts.master')

@section('content')

    <a href="https://soundcloud.com/luraymusic/sets/the-wilder-preview-mastered" class="sc-player"></a>

    <!--<blockquote class="album-quote album-quote--1">
        <p>...the standouts are Carey’s radiant voice, which fluctuates between soothing and soaring, and her melodic banjo strumming.</p>
        <p class="source italic"><a target="_blank" href="http://www.washingtonpost.com/goingoutguide/luray-album-review-the-wilder/2013/08/22/5411a0fa-0687-11e3-9259-e2aafe5a5f84_story.html">The Washington Post</a></p>
    </blockquote>-->

    <!--<blockquote class="album-quote album-quote--2">
        <p>...beautifully lush album.</p>
        <p class="source italic"><a target="_blank" href="http://www.npr.org/blogs/allsongs/2013/08/26/215800528/new-music-tv-on-the-radio-rokia-traore-lucius-more">NPR</a></p>
    </blockquote>-->

    <figure>
        <img id="album-art" src="assets/images/album_artwork.jpg" alt="Luray album art">
        <figcaption>
            <h1>LURAY <span class="brand-color">THE WILDER</span></h1>
            <p class="epsilon">Produced by Sean Carey of Bon Iver</p>
        </figcaption>

    </figure>

    <ul class="purchase">
        <li><a class="itunes" href="http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewAlbum?id=662389920" target="_blank">{{ HTML::image('assets/images/logos/itunes.png', 'itunes logo')}}</a></li>
        <li><a target="_blank" class="bigcartel" href="http://luray.bigcartel.com/product/the-wilder-cd">{{ HTML::image('assets/images/logos/bigcartel.png', 'bigcartel logo')}}</a></li>
        <!-- <li><a class="amazon" href="#">{{ HTML::image('assets/images/logos/amazon.png', 'amazon logo')}}</a></li> -->
            </ul>

@stop
