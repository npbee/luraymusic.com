@extends('layouts.master')

@section('content')

    <h1>MENU</h1>

    <ul class="in-page-menu">
        <li><a class="news-nav" href="http://news.luraymusic.com">News</a></li><!--
        --><li><a class="media-nav" href="{{ URL::route('media') }}">Media</a></li><!--
        --><li><a class="albums-nav" href="{{ URL::route('albums') }}">Albums</a></li><!--
        --><li><a class="tour-nav" href="{{ URL::route('tour') }}">Tour</a></li><!--
        --><li><a class="contact-nav" href="{{ URL::route('contact') }}">Contact</a></li>
    </ul>


@stop