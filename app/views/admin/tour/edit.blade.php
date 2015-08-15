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

        @include('admin.tour.form')

    {{ Form::close() }}

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.tour.destroy', $tourdate->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}


</section>

@stop
