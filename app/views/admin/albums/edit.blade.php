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
        <ul class="form-fields">

            <li>
                {{ Form::label('image', 'Cover Art:', array('class' => 'beta')) }}
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail">
                        <img src="{{ $album->art_full_path }}">
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
                {{ Form::label('release_date', 'DATE', array('class' => 'beta')) }}
                {{ Form::text('release_date',null, array('class' => 'text-input date-select')) }}
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
                <h2 class="beta">Associated Press Quotes:</h2>
                @foreach($quotes as $quote)
                <blockquote class="album-quote">
                    <p>{{ $quote->quote }}</p>
                    <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a></p>
                </blockquote>
                <a href="{{ URL::route('admin.press.edit', $quote->id) }}">Edit</a>
                @endforeach
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
