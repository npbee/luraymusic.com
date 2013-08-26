@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.image.create') }}">New Image</a>
</article>

<h1>Current Images:</h1>

<p>
    <span data-icon="&#xe006;"> NOTE:</span>  To change the order of the images, you can either drag the images to the position you want or use the 'move up' and 'move down' arrows.  After you're done and have the order you want, hit submit!
</p>


<article class="photos">
    <div class="image-grid" id="image-grid">
    {{ Form::open(array('route' => 'admin.image.sort')) }}

    {{ Form::submit('Save Sorting Order', array('class' => 'button save inactive', 'id' => 'submit')) }}

        <ul>
            @foreach($pics as $pic)
                <li draggable="true" class="img draggable">
                    <a data-sort="{{ $pic->sort_order }}" class="edit text-center" href="{{ URL::route('admin.image.edit', $pic->id) }}">
                            <img src="{{ $pic->thumb_path }}" alt="{{ $pic->title }}">
                            <span class="edit">Edit</span>

                    </a>
                    <span class="move move-up">&uarr; Move up</span>
                    <span class="move move-down">Move down &darr;</span>
                    <span>
                         {{ Form::hidden('sort_order_'.$pic->id, $pic->sort_order, array('class' => 'sort-order')) }}
                         {{ Form::hidden('id[]', $pic->id) }}
                    </span>
                </li>
            @endforeach
        </ul>

    {{ Form::close() }}

    </div>
</article>

@stop