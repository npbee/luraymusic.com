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

    {{ Form::model($album, array('method' => 'put', 'route' => array('admin.albums.update', $album->id ))) }}
        <ul class="form-fields">

            <li>
                {{ Form::label('description', 'Album Description:', array('class' => 'beta')) }}
                {{ Form::textarea(
                    'description',null, array(
                        'class' => 'text-input ',
                        'placeholder' => 'Put the album description here.')) }}
            </li>

            <li>
                {{ Form::label('audio_embed', 'Audio Embed Code:', array('class' => 'beta')) }}
                {{ Form::textarea('audio_embed',null, array('class' => 'text-input ',
                    'placeholder' => 'Put the code for the audio embed here, e.g. Soundcloud')) }}
            </li>

            <li>
                {{ Form::label('itunes_link', 'Itunes Link:', array('class' => 'beta')) }}
                {{ Form::text('itunes_link',null, array('class' => 'text-input ')) }}
            </li>

            <li>
                {{ Form::label('big_cartel_link', 'Big Cartel Link:', array('class' => 'beta')) }}
                {{ Form::text('big_cartel_link',null, array('class' => 'text-input ')) }}
            </li>

            <li>
                {{ Form::label('lyrics', 'Lyrics:', array('class' => 'beta')) }}
                {{ Form::textarea('lyrics',null, array('class' => 'text-input ')) }}
            </li>

            <li>
                {{ Form::label('credits', 'Credits:', array('class' => 'beta')) }}
                {{ Form::textarea('credits',null, array('class' => 'text-input ')) }}
            </li>

            <li>
                {{ Form::submit('Save', array('class' => 'button save')) }}
             <a class="cancel" href="{{ URL::route('admin.albums.index') }}">Cancel</a>
            </li>

        </ul>

    {{ Form::close() }}

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.albums.destroy', $album->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}

</section>

@stop
