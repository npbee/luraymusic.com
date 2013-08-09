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

    <h1>Add Video:</h1>

    {{ Form::open(array('route' => 'admin.videos.store')) }}
        <ul class="form-fields">

            <li>
                {{ Form::label('embed_code', 'VIDEO EMBED CODE:', array('class' => 'beta')) }}
                {{ Form::textarea('embed_code',null, array('class' => 'text-input ')) }}
            </li>

            <li>
                {{ Form::submit('Save', array('class' => 'button save')) }}
             <a class="cancel" href="{{ URL::route('admin.videos.index') }}">Cancel</a>
            </li>

        </ul>

    {{ Form::close() }}

</section>

@stop