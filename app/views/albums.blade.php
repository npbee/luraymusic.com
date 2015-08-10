@extends('layouts.master')

@section('content')

@foreach($albums as $album)
<div class="media">

    <div class="media__content">
        <img src="{{ $album->art_thumb_path }}">
        <nav class="tab-nav">
            <ul>
                <li><a class="gamma tab-nav--active" href="#info">INFO</a></li><!--
                --><li><a class="gamma" href="#lyrics">LYRICS</a></li><!--
                --><li><a class="gamma" href="#credits">CREDITS</a></li>
            </ul>
        </nav>
        <noscript>
            <p>Please enable javascript to hear Luray tracks</p>
            <a href="https://soundcloud.com/luraymusic">https://soundcloud.com/luraymusic</a>
        </noscript>
        {{ $album->audio_embed }}

    </div>

    <div class="media__text tabs">

        <section id="info" class="tabs__content tab--active">

            <h1>{{ $album->title }} ({{ DateHelp::year($album->release_date) }})</h1>

            {{ Markdown::parse($album->description) }}

            <h2>PRESS:</h2>

            @foreach(($album->quotes) as $quote)
                @if($quote->add_to_album_page == 1 && $quote->is_featured == 0)
                    <blockquote class="album-quote">
                        <p>{{ $quote->quote }}</p>
                        <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a>
                    </blockquote>
                @endif
            @endforeach

            <p>
                <a href="{{ URL::route('press') }}">Full Press Page</a>
            </p>

            <h2>PURCHASE:</h2>

            <ul class="purchase">
                @if ($album->big_cartel_link) 
                <li><a target="_blank" class="bigcartel" href="{{ $album->big_cartel_link }}">{{ HTML::image('assets/images/logos/bigcartel.png', 'bigcartel logo')}}</a></li>
                @endif

                @if ($album->itunes_link)
                <li><a class="itunes" href="{{ $album->itunes_link }}" target="_blank">{{ HTML::image('assets/images/logos/itunes.png', 'itunes logo')}}</a></li>
                @endif
            </ul>

        </section>

        <section id="lyrics" class="tabs__content lyrics">

            <h1>LYRICS</h1>

            {{ Markdown::parse($album->lyrics) }}

        </section>

        <section id="credits" class="credits tabs__content">

            <h1>Album Credits</h1>

            {{ Markdown::parse($album->credits) }}

        </section>

    </div>

</div>
@endforeach

@stop

@section('footer')
    @include('_partials.footer')
@stop

