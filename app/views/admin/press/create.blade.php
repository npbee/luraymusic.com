@extends('layouts.admin_master')

@section('content')

    <h1>Add Press Quote:</h1>

    {{ Form::open(array('route' => 'admin.press.store')) }}
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
                {{ Form::text('album', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('add_to_album_page', 'ADD TO ALBUM PAGE?', array('class' => 'beta')) }}
                <span class="note">Do you want to add this to the album page?</span>
                {{ Form::checkbox('add_to_album_page', 'add_to_album_page') }}
            </li>

            <li>
                {{ Form::submit('Save', array('class' => 'button save')) }}
             <a class="cancel" href="{{ URL::route('admin.tour.index') }}">Cancel</a>
            </li>

        </ul>

    {{ Form::close() }}

    @if ($errors->any())
        <h2>Errors</h2>
        <ul>
            {{ implode('', $errors->all('<li>:message</li>')) }}
        </ul>
    @endif

</section>

@stop