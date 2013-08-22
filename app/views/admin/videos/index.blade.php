@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.videos.create') }}">New Video</a>
</article>

<h1>Current Videos:</h1>

{{-- Form::open(array('route' => 'admin.videos.sort')) --}}
<article class="videos">
    @foreach($videos as $video)
    <a href="{{ URL::route('admin.videos.edit', $video->id ) }}">Edit</a>
    <!-- <div class="sort">
        <span class="move move-up">&uarr; Move up</span>
        <span class="move move-down">&darr; Move down</span>
    </div> -->
    <div class="video-wrapper">
        {{ $video->embed_code }}
    </div>
    {{-- Form::text('sort_order_'.$video->id, $video->sort_order, array('class' => 'sort-order')) --}}
    {{-- Form::hidden('id[]', $video->id) --}}
    @endforeach
</article>

{{-- Form::submit('Save Sorting Order', array('class' => 'button save inactive', 'id' => 'submit')) --}}

{{-- Form::close() --}}


@stop