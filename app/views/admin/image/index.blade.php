@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.image.create') }}">New Image</a>
</article>

<h1>Current Images:</h1>

<article class="photos">
    <div class="image-grid" id="image-grid">
        @foreach($pics as $pic)
            <a class="edit text-center" href="{{ URL::route('admin.image.edit', $pic->id) }}">
                <div class="img">
                    <img src="{{ $pic->thumb_path }}" alt="{{ $pic->title }}">
                    <span class="edit">Edit</span>
                </div>
            </a>
        @endforeach
    </div>
</article>

@stop