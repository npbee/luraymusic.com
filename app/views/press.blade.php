@extends('layouts.master')

@section('content')

    <h1>PRESS</h1>

    @foreach($quotes as $quote)

        <blockquote class="album-quote">
            <p>{{ $quote->quote }}</p>
            <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a></p>
        </blockquote>

    @endforeach

@stop