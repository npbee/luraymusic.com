@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.videos.create') }}">New Video</a>
</article>

<h1>Current Videos:</h1>

<article class="videos">
        @foreach($videos as $video)
        <a href="{{ URL::route('admin.videos.edit', $video->id ) }}">Edit</a>
        <div class="video-wrapper">
            {{ $video->embed_code }}
        </div>
        @endforeach

</article>


@stop