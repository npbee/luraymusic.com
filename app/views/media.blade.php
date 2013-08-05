@extends('layouts.master')

@section('content')

<article class="photos">
    <h1>PHOTOS</h1>
    <div class="image-grid" id="image-grid">
        @foreach($images as $image)
            <a href="{{ $image->full_path }}" class="lightbox-trigger" title="{{ $image->title }}">
                <img class="img" src="{{ $image->thumb_path }}" alt="{{ $image->title }}">
            </a>
        @endforeach
    </div>
</article>

<article class="videos">
    <h1>VIDEOS</h1>

    @foreach($videos as $video)
        <div class="video-wrapper">
            {{ $video->embed_code }}
        </div>
    @endforeach

</article>

@stop

@section('footer')
    @include('_partials.footer')
@stop