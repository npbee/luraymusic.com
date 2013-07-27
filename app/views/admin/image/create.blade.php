@extends('layouts.admin_master')

@section('content')

    <h1>Add Image:</h1>

    {{ Form::open(array('route' => 'admin.image.store', 'files' => 'true')) }}

        <ul class="form-fields">
            <li>
                <div class="control-group">
                {{ Form::label('image', 'Image') }}

                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                    </div>
                    <div>
                        <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>{{ Form::file('image') }}</span>
                    </div>
                </div>
            </div>
            </li>

            <li>
                {{ Form::label('author', 'AUTHOR', array('class' => 'beta')) }}
                {{ Form::text('author', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::label('title', 'TITLE', array('class' => 'beta')) }}
                {{ Form::text('title', null, array('class' => 'text-input')) }}
            </li>

            <li>
                {{ Form::submit('Save', array('class' => 'button save')) }}
            </li>

    {{ Form::close() }}

    @if ($errors->any())
        <h2>Errors</h2>
        <ul>
            {{ implode('', $errors->all('<li>:message</li>')) }}
        </ul>
    @endif

</section>

@stop