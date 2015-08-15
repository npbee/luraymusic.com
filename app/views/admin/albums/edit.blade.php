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

    <h1>Edit Album:</h1>

    {{ Form::model($album, array('method' => 'put', 'route' => array('admin.albums.update', $album->id ), 'files' => 'true' )) }}

        @include('admin.albums.form');

    {{ Form::close() }}

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.albums.destroy', $album->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}

</section>

@stop
