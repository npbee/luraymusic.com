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

    <h1>Add Image:</h1>

    {{ Form::open(array('route' => 'admin.image.store', 'files' => 'true')) }}

        <ul class="form-fields">
            <li>
                {{ Form::label('image', 'Image') }}
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail">
                        <img src="http://www.placehold.it/300x300/EFEFEF/AAAAAA&amp;text=no+image">
                    </div>
                    <div>
                        <span class="btn btn-file">
                            <span class="fileupload-new small-button">Select image</span>
                            <span class="fileupload-exists small-button">Change</span>
                            {{ Form::file('image') }}
                        </span>
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
                <a class="cancel" href="{{ URL::route('admin.tour.index') }}">Cancel</a>
            </li>
        </ul>

    {{ Form::close() }}

</section>

@stop