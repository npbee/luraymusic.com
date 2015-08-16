<ul class="form-fields">
    <li>
        {{ Form::label('image', 'Image:', array('class' => 'beta')) }}
        <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-preview thumbnail">
                @if (isset($pic)) 
                <img id="img" src="{{ $pic->full_path }}">
                @else
                <img id="img" src="http://www.placehold.it/600x600/EFEFEF/AAAAAA&amp;text=no+image">
                @endif
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
        {{ Form::label('author', 'Author:', array('class' => 'beta')) }}
        {{ Form::text('author', null, array('class' => 'text-input', 'placeholder' => 'The author')) }}
    </li>

    <li>
        {{ Form::label('title', 'Caption:', array('class' => 'beta')) }}
        {{ Form::text('title', null, array('class' => 'text-input', 'placeholder' => 'Luray in action')) }}
    </li>

    @if (isset($sort_order))
    <li>
        {{ Form::hidden('sort_order', $sort_order) }}
    </li>
    @endif

    <li>
        {{ Form::submit('Save', array('class' => 'button save')) }}
        <a class="cancel" href="{{ URL::route('admin.image.index') }}">Cancel</a>
    </li>
</ul>
