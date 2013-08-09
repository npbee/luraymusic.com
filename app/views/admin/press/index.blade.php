@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.press.create') }}">New Press Quote</a>
</article>

<h1>Current Press Quotes:</h1>

@foreach($quotes as $quote)
<blockquote class="album-quote">
    <p>{{ $quote->quote }}</p>
    <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a></p>
    <a href="{{ URL::route('admin.press.edit', $quote->id ) }}">Edit</a>
</blockquote>
@endforeach

@stop