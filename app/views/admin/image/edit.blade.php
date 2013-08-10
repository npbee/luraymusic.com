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

    <h1>Edit Image:</h1>

    {{ Form::model($pic, array('method' => 'put', 'route' => array('admin.image.update', $pic->id ))) }}

        <ul class="form-fields">
            <li>
                <img src="{{ $pic->full_path }}">
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
                <a class="cancel" href="{{ URL::route('admin.image.index') }}">Cancel</a>
            </li>
        </ul>

    {{ Form::close() }}

    {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.image.destroy', $pic->id ), 'data-confirm' => 'Are you sure you want to delete this?')) }}

        {{ Form::submit('Delete', array('class' => 'delete')) }}

    {{ Form::close() }}

    <p><span data-icon="&#xe006;">NOTE:</span>  You can only update the author or caption for pictures, you can't change the picture that was uploaded.  If you uploaded the wrong picture, just delete it and start over with a new image.</p>

</section>

@stop