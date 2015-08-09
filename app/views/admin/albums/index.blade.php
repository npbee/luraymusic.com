@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.albums.create') }}">New Album</a>
</article>

<h1>Current Albums:</h1>

<article class="admin-albums photos">

    <div class="image-grid" id="image-grid">
        <ul>
        @foreach($albums as $album)
            <li class="img">
                <a class="edit" href="{{ URL::route('admin.albums.edit', $album->id) }}">
                    <img src="{{ $album->art_thumb_path }}">
                    <div><em>Title</em></div>
                    <span class="edit">Edit</span>
                </a>
            </li>
        @endforeach
        </ul>
    </div>

</article>

@stop
