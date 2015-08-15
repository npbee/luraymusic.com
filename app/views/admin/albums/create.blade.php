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

    <h1>Add Album:</h1>

    {{ Form::open(array('route' => 'admin.albums.store', 'files' => 'true')) }}

        @include('admin.albums.form');

    {{ Form::close() }}

</section>

@stop
