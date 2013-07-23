@extends('layouts.master')

@section('sub-header')

    <a href="{{ URL::route('tour') }}">Upcoming Dates</a>

@stop


@section('content')

<table class="table">
    <thead>
        <th>DATE</th>
        <th>VENUE</th>
        <th>CITY</th>
    </thead>
    <tbody>
        @foreach($tourdates as $tourdate)
        @if($tourdate -> date < date('Y-m-d H:m:s'))
        <tr @if ($tourdate -> review_id) }} class="reviewed" data-review="review-{{ $tourdate -> id }}" @endif >
            <td>{{ $tourdate -> date }}</td>
            <td>{{ $tourdate -> location }}</td>
            <td>{{ $tourdate -> venue}}@if($tourdate -> support) <span class="support">w/ {{ $tourdate -> support }}</span>@endif</td>
        </tr>
        @endif
        @endforeach

    </tbody>

</table>

<section class="tour-reviews">
    @foreach($tourdates as $tourdate)
    <blockquote id="review-{{ $tourdate -> id }}" class="tour-review">
        <a href="{{ $tourdate -> review_link }}">
            <p>{{ $tourdate -> review_text }}</p>
            <p class="source italic">{{ $tourdate -> review__source }}</p>
        </a>
    </blockquote>
    @endforeach

</section>


@stop

@section('footer')
    @include('_partials.footer')
@stop