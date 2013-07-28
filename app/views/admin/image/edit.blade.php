@extends('layouts.admin_master')

@section('content')

    <h1>Edit Image:</h1>

    {{ Form::model($pic, array('method' => 'put', 'route' => array('admin.image.update', $pic->id ))) }}

        <ul class="form-fields">
            <li>
                {{ Form::label('image', 'Image') }}
                <div class="fileupload fileupload-exists" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail">
                        <img src="{{ $pic->full_path }}">
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
            </li>
        </ul>

    {{ Form::close() }}

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.image.destroy', $pic->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}

</section>

@stop