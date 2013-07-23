@extends('layouts.master')

@section('content')

<article class="photos">
    <h1>PHOTOS</h1>
    <div class="image-grid" id="image-grid">
        <img src="assets/images/press/1-thumb.jpg" alt="press 1">
        <img src="assets/images/press/2-thumb.jpg" alt="press 2">
        <img src="assets/images/show-pics/cameo-gallery/1-thumb.jpg" alt="Cameo Gallery 1">
        <img src="assets/images/show-pics/cameo-gallery/2-thumb.jpg" alt="Cameo Gallery 2">
        <img src="assets/images/show-pics/cameo-gallery/3-thumb.jpg" alt="Cameo Gallery 3">
        <img src="assets/images/show-pics/rock-n-roll-hotel/1-thumb.jpg" alt="Rock & Roll Hotel 1">
        <img src="assets/images/show-pics/cmj/1-thumb.jpg" alt="CMJ 1">
        <img src="assets/images/show-pics/camel/1-thumb.jpg" alt="Camel 1">
        <img src="assets/images/show-pics/camel/2-thumb.jpg" alt="Camel 2">
        <img src="assets/images/show-pics/camel/3-thumb.jpg" alt="Camel 3">
    </div>
</article>

<article class="videos">
    <h1>VIDEOS</h1>

    <div class="video-wrapper">
        <iframe width="560" height="315" src="//www.youtube.com/embed/j9kiGZq2Wy0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video-wrapper">
        <iframe width="560" height="315" src="//www.youtube.com/embed/54gIEBAA3G4" frameborder="0" allowfullscreen></iframe>
    </div>

</article>

@stop

@section('footer')
    @include('partials.footer')
@stop