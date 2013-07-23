@extends('layouts.admin_master')

@section('content')

    <h1>Add Tour Date:</h1>

    {{ Form::open(array('route' => 'admin.tour.store')) }}

        {{ Form::label('date', 'Date') }}
        {{ Form::text('date',null, array('class' => 'text-input')) }}

        {{ Form::label('venue', 'Venue') }}
        {{ Form::text('venue', null, array('class' => 'text-input')) }}

        {{ Form::label('location', 'Location') }}
        {{ Form::text('location', null, array('class' => 'text-input')) }}

        {{ Form::label('support', 'Support') }}
        {{ Form::text('support', null, array('class' => 'text-input')) }}

        {{ Form::label('review_text', 'Review Blurb') }}
        {{ Form::textarea('review_text', null, array('class' => 'text-input')) }}

        {{ Form::label('review_source', 'Review Source') }}
        {{ Form::text('review_source', null, array('class' => 'text-input')) }}

        {{ Form::label('review_link', 'Link to review') }}
        {{ Form::text('review_link', null, array('class' => 'text-input')) }}

        {{ Form::submit('Save', array('class' => 'button')) }}
        <a href="{{ URL::route('admin.tour.index') }}">Cancel</a>

    {{ Form::close() }}

</section>

@stop