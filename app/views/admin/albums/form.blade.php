<ul class="form-fields">

    <li>
        {{ Form::label('image', 'Cover Art:', array('class' => 'beta')) }}
        <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-preview thumbnail">
                @if (isset($album))
                <img id="img" src="{{ $album->art_full_path }}">
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
        {{ Form::label('title', 'Album Title:', array('class' => 'beta')) }}
        {{ Form::text('title',null, array('class' => 'text-input ', 'placeholder' => 'The Wilder')) }}
    </li>

    <li>
        {{ Form::label('release_date', 'Release Date:', array('class' => 'beta')) }}
        {{ Form::text('release_date',null, array('class' => 'text-input date-select', 'readonly' => 'readonly', 'placeholder' => 'YYYY-MM-DD')) }}
    </li>

    <li>
        {{ Form::label('description', 'Album Description:', array('class' => 'beta')) }}
        <div class="tabs two">
            <nav>
                <ul>
                    <li>
                        <a 
                            data-do-not-scroll=true 
                            class="tab--active" 
                            href="#markdown-description">
                            Markdown
                        </a></li><!--
                    --><li>
                        <a 
                            data-do-not-scroll=true 
                            class="" 
                            data-preview="description" 
                            href="#preview-description">
                            Preview
                        </a></li>
                </ul>
            </nav>

            <div class="tab__content">
                <section class="tab--active" id="markdown-description">
                    {{ Form::textarea(
                        'description',null, array(
                            'class' => 'text-input ',
                            'placeholder' => '# My album **is great**!')) }}
                </section>

                <section class="tabs__content markdown-preview" id="preview-description">
                    Preview
                </section>
            </div>
        </div>

    </li>

    <li>
        {{ Form::label('audio_embed', 'Audio Embed Code:', array('class' => 'beta')) }}
        {{ Form::textarea('audio_embed',null, array('class' => 'text-input ',
            'placeholder' => '<iframe width="100%" src="https://w.soundcloud.com"></iframe>')) }}
    </li>

    <li>
        {{ Form::label('itunes_link', 'Itunes Link:', array('class' => 'beta')) }}
        {{ Form::text('itunes_link',null, array('class' => 'text-input ', 'placeholder' => 'http://itunes.com...')) }}
    </li>

    <li>
        {{ Form::label('big_cartel_link', 'Big Cartel Link:', array('class' => 'beta')) }}
        {{ Form::text('big_cartel_link',null, array('class' => 'text-input ', 'placeholder' => 'http://bigcartel.com' )) }}
    </li>

    <li>
        {{ Form::label('lyrics', 'Lyrics:', array('class' => 'beta')) }}
        <div class="tabs two">
            <nav>
                <ul>
                    <li><a data-do-not-scroll=true class="tab--active" href="#markdown-lyrics">Markdown</a></li><!--
                    --><li><a data-do-not-scroll=true data-preview="lyrics" href="#preview-lyrics">Preview</a></li>
                </ul>
            </nav>

            <div class="tab__content">
                <section class="tab--active" id="markdown-lyrics">
                    {{ Form::textarea(
                        'lyrics',null, array(
                            'class' => 'text-input ',
                            'placeholder' => '# Track 1')) }}
                </section>

                <section class="markdown-preview" id="preview-lyrics">
                    Preview
                </section>
            </div>
        </div>

    </li>

    <li>
        {{ Form::label('credits', 'Credits:', array('class' => 'beta')) }}
        <div class="tabs two">
            <nav>
                <ul>
                    <li><a data-do-not-scroll=true class="tab--active" href="#markdown-credits">Markdown</a></li><!--
                    --><li><a data-do-not-scroll=true data-preview="credits" href="#preview-credits">Preview</a></li>
                </ul>
            </nav>

            <div class="tab__content">
                <section class="tab--active" id="markdown-credits">
                    {{ Form::textarea(
                        'credits',null, array(
                            'class' => 'text-input ',
                            'placeholder' => '# Credits')) }}
                </section>

                <section class="markdown-preview" id="preview-credits">
                    Preview
                </section>
            </div>
        </div>

    </li>

    <li>
        {{ Form::submit('Save', array('class' => 'button save')) }}
        <a class="cancel" href="{{ URL::route('admin.albums.index') }}">Cancel</a>
    </li>

</ul>
