<ul class="form-fields">

    <li>
        {{ Form::label('embed_code', 'VIDEO EMBED CODE:', array('class' => 'beta')) }}
        {{ Form::textarea('embed_code',null, array('class' => 'text-input ', 'placeholder' => '<iframe width="420" height="315" src="//www.youtube.com/embed/INZVnzwxEtM"></iframe>')) }}
    </li>

    <li>
        {{ Form::submit('Save', array('class' => 'button save')) }}
        <a class="cancel" href="{{ URL::route('admin.videos.index') }}">Cancel</a>
    </li>

    <li>
        {{-- Form::hidden('sort_order', $sort_order) --}}
    </li>

</ul>
