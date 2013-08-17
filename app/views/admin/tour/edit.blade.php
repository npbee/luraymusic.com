@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

     @if ($errors->any())
        <div class="alert alert-error">
            <span class="gamma">Trouble!</span>
            <ul>
                {{ implode('', $errors->all('<li>:message</li>')) }}
            </ul>
        </div>
    @endif

    <h1>Edit Tour Date:</h1>

    {{ Form::model($tourdate, array('method' => 'put', 'route' => array('admin.tour.update', $tourdate->id ))) }}

        <ul class="form-fields">

            <li>
                {{ Form::label('date', 'DATE', array('class' => 'beta')) }}
                {{ Form::text('date',null, array('class' => 'text-input date-select')) }}
            </li>

            <li>
                {{ Form::label('venue', 'VENUE', array('class' => 'beta')) }}
                {{ Form::text('venue', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('location', 'LOCATION', array('class' => 'beta')) }}
                {{ Form::text('location', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('show_info', 'SHOW INFO', array('class' => 'beta')) }}
                <span class="note">Put the link to the show info here.</span>
                {{ Form::text('show_info', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('support', 'SUPPORT', array('class' => 'beta')) }}
                {{ Form::text('support', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('review_text', 'REVIEW BLURB',  array('class' => 'beta')) }}
                {{ Form::textarea('review_text', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('review_source', 'REVIEW SOURCE', array('class' => 'beta')) }}
                {{ Form::text('review_source', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('review_link', 'REVIEW LINK', array('class' => 'beta')) }}
                {{ Form::text('review_link', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::submit('Save', array('class' => 'button save')) }}
                <a class="cancel" href="{{ URL::route('admin.tour.index') }}">Cancel</a>
            </li>

        </ul>

    {{ Form::close() }}

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.tour.destroy', $tourdate->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}


</section>

@stop