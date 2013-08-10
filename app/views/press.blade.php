@extends('layouts.master')

@section('content')

    <h1>PRESS</h1>

    @foreach($quotes as $quote)
        @if($quote->add_to_album_page == 1 && $quote->is_featured == 1)
            <blockquote class="album-quote">
                <p>{{ $quote->quote }}</p>
                <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a>
            </blockquote>
        @endif
    @endforeach

    @foreach($quotes as $quote)
        @if($quote->add_to_album_page == 1 && $quote->is_featured == 0)
            <blockquote class="album-quote">
                <p>{{ $quote->quote }}</p>
                <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a>
            </blockquote>
        @endif
    @endforeach

@stop