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

        @include('admin.press.form')

    {{ Form::close() }}

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.press.destroy', $quote->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}

</section>

@stop
