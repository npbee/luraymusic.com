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
        <ul class="form-fields">

            <li>
                {{ Form::label('image', 'Image') }}
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail">
                        <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA&amp;text=no+image">
                    </div>
                    <div>
                        <span class="btn btn-file">
                            <span class="fileupload-new button--small">Select image</span>
                            <span class="fileupload-exists button--small">Change</span>
                            {{ Form::file('image') }}
                        </span>
                    </div>
                </div>
            </li>

            <li>
                {{ Form::label('title', 'Album Title:', array('class' => 'beta')) }}
                {{ Form::text('title',null, array('class' => 'text-input ')) }}
            </li>

            <li>
                {{ Form::label('release_date', 'Release Date:', array('class' => 'beta')) }}
                {{ Form::text('release_date',null, array('class' => 'text-input date-select', 'readonly' => 'readonly')) }}
            </li>

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

</section>

@stop
