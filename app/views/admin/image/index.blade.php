@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.image.create') }}">New Image</a>
</article>

<h1>Current Images:</h1>
<hr>

<article class="photos">
    <h1>PHOTOS</h1>
    <div class="image-grid" id="image-grid">
        @foreach($pics as $pic)
            <div class="img">
                <img src="{{ $pic->thumb_path }}" alt="{{ $pic->title }}">
                <a class="edit text-center" href="{{ URL::route('admin.image.edit', $pic->id) }}">Edit</a>
            </div>
        @endforeach
    </div>
</article>

@stop