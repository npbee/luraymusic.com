<ul class="form-fields">

    <li>
        {{ Form::label('quote', 'QUOTE', array('class' => 'beta')) }}
        {{ Form::textarea('quote',null, array('class' => 'text-input', 'placeholder' => 'This album is great.')) }}
    </li>

    <li>
        {{ Form::label('source', 'SOURCE', array('class' => 'beta')) }}
        {{ Form::text('source', null, array('class' => 'text-input', 'placeholder' => 'Pitchfork')) }}
    </li>

    <li>
        {{ Form::label('url', 'URL', array('class' => 'beta')) }}
        {{ Form::text('url', null, array('class' => 'text-input', 'placeholder' => 'pitchfork.com')) }}
    </li>

    <li>
        {{ Form::label('album', 'ALBUM', array('class' => 'beta')) }}
        <span class="note">Which album is this quote for?</span>
        {{ Form::select('album_id', $album_choices) }}
    </li>

    <li>
        {{ Form::label('add_to_album_page', 'ADD TO ALBUM PAGE?', array('class' => 'beta')) }}
        <span class="note">Do you want to add this to the album page?</span>
        {{ Form::checkbox('add_to_album_page', 1, true) }}
    </li>

    @if (isset($sort_order))
    <li>
        {{ Form::hidden('sort_order', $sort_order) }}
    </li>
    @endif

    <li>
        {{ Form::submit('Save', array('class' => 'button save')) }}
        <a class="cancel" href="{{ URL::route('admin.press.index') }}">Cancel</a>
    </li>

</ul>
