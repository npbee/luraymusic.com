@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.image.create') }}">New Image</a>
</article>

<h1>Current Images:</h1>



<article class="photos">
    <div class="image-grid" id="image-grid">
    {{ Form::open(array('route' => 'admin.image.sort')) }}
        @foreach($pics as $pic)
            <div class="img">
                <a data-sort="{{ $pic->sort_order }}" class="edit text-center" href="{{ URL::route('admin.image.edit', $pic->id) }}">
                        <img src="{{ $pic->thumb_path }}" alt="{{ $pic->title }}">
                        <span class="edit">Edit</span>
                </a>
                <span>
                     {{ Form::label('sort_order[]', 'Sort Order:') }}
                     {{ Form::text('sort_order[]', $pic->sort_order) }}
                     {{ Form::hidden('id', $pic->id) }}
                </span>
            </div>
        @endforeach

    {{ Form::submit('Save Sorting Order', array('class' => 'button save')) }}

    {{ Form::close() }}

    </div>
</article>

@stop