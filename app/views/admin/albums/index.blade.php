@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.albums.create') }}">New Album</a>
</article>

<h1>Current Albums:</h1>

<article class="admin-albums">

    @foreach($albums as $album)
    <div class="admin-albums__album">
        <a class="edit" href="{{ URL::route('admin.albums.edit', $album->id) }}">
            <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA&amp;text=no+image">
            <h2>Title</h2>
        </a>
    </div>
    @endforeach

</article>

@stop
