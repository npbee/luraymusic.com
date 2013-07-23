@extends('layouts.admin_master')

@section('content')

    <h1>Add Tour Date:</h1>

    {{ Form::open(array('route' => 'admin.tour.store')) }}

        {{ Form::label('date', 'Date') }}
        {{ Form::text('date') }}

        {{ Form::label('venue', 'Venue') }}
        {{ Form::text('venue') }}

        {{ Form::label('location', 'Location') }}
        {{ Form::text('location') }}

        {{ Form::label('support', 'Support') }}
        {{ Form::text('support') }}

        {{ Form::label('review_text', 'Review Blurb') }}
        {{ Form::textarea('review_text') }}

        {{ Form::label('review_source', 'Review Source') }}
        {{ Form::text('review_source') }}

        {{ Form::label('review_link', 'Link to review') }}
        {{ Form::text('review_link') }}

        {{ Form::submit('Save') }}
        <a href="{{ URL::route('admin.tour.index') }}">Cancel</a>

    {{ Form::close() }}

</section>

@stop