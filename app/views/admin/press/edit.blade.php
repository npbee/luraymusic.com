@extends('layouts.admin_master')

@section('content')

    @if ($errors->any())
        <div class="alert alert-error">
            <h2>Trouble!</h2>
            <ul>
                {{ implode('', $errors->all('<li>:message</li>')) }}
            </ul>
        </div>
    @endif

    <h1>Add Press Quote:</h1>

    {{ Form::model($quote, array('method' => 'put', 'route' => array('admin.press.update', $quote->id ))) }}
        <ul class="form-fields">

            <li>
                {{ Form::label('quote', 'QUOTE', array('class' => 'beta')) }}
                {{ Form::textarea('quote',null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('source', 'SOURCE', array('class' => 'beta')) }}
                {{ Form::text('source', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('url', 'URL', array('class' => 'beta')) }}
                {{ Form::text('url', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('album', 'ALBUM', array('class' => 'beta')) }}
                <span class="note">Which album is this quote for?</span>
                {{ Form::select('album', array('the-wilder' => 'The Wilder'), 'The Wilder') }}
            </li>

            <li>
                {{ Form::label('add_to_album_page', 'ADD TO ALBUM PAGE?', array('class' => 'beta')) }}
                <span class="note">Do you want to add this to the album page?</span>
                {{ Form::checkbox('add_to_album_page', 1, true) }}
            </li>

            <li>
                {{ Form::submit('Save', array('class' => 'button save')) }}
             <a class="cancel" href="{{ URL::route('admin.press.index') }}">Cancel</a>
            </li>

        </ul>

    {{ Form::close() }}

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.press.destroy', $quote->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}

</section>

@stop