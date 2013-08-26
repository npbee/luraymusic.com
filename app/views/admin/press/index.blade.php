@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.press.create') }}">New Press Quote</a>
</article>

<h1>Current Press Quotes:</h1>

{{ Form::open(array('route' => 'admin.press.sort')) }}

    {{ Form::submit('Save Sorting Order', array('class' => 'button save inactive', 'id' => 'submit')) }}

    <ul class="sorted">
        @foreach($quotes as $quote)
            <li draggable="true" class="draggable">
                <a class="edit" href="{{ URL::route('admin.press.edit', $quote->id ) }}">Edit</a>
                <div class="sort">
                    <span class="move move-up">&uarr; Move up</span>
                    <span class="move move-down">&darr; Move down</span>
                </div>
                <blockquote class="album-quote">
                    <p>{{ $quote->quote }}</p>
                    <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a></p>

                </blockquote>

                 {{ Form::hidden('sort_order_'.$quote->id, $quote->sort_order, array('class' => 'sort-order')) }}
                 {{ Form::hidden('id[]', $quote->id) }}
            </li>
        @endforeach
    </ul>
    <a id="reset">Reset</a>

{{ Form::close() }}

@stop