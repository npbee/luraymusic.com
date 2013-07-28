@extends('layouts.master')

@section('content')

<article class="photos">
    <h1>PHOTOS</h1>
    <div class="image-grid" id="image-grid">
        @foreach($images as $image)
            <a href="{{ $image->full_path }}" class="lightbox-trigger">
                <img class="img" src="{{ $image->thumb_path }}" alt="{{ $image->title }}">
            </a>
        @endforeach
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
    @include('_partials.footer')
@stop