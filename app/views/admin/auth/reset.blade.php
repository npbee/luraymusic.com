@extends('layouts.admin_login')

@section('content')

<h1>Reset Password:</h1>
    {{ Form::open() }}

        @if ($errors->has('login'))
            <div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
        @endif

        <ul class="form-fields">
            <li>
                {{ Form::label('email', 'Email:', array('class' => 'beta')) }}
                {{ Form::text('email', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::submit('Reset Password', array('class' => 'button')) }}
            </li>
        </ul>

    {{ Form::close() }}

    @if ($errors->any())
        <h2>Errors</h2>
        <ul>
            {{ implode('', $errors->all('<li>:message</li>')) }}
        </ul>
    @endif

@stop