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

    {{ Form::model($video, array('method' => 'put', 'route' => array('admin.videos.update', $video->id ))) }}
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

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.videos.destroy', $video->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}

</section>

@stop