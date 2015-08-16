@extends('layouts.admin_master')

@section('content')

{{ Notification::showAll() }}

<article>
    <a class="button" href="{{ URL::route('admin.tour.create') }}">New Tour Date</a>
</article>


<table class="table">
    <thead>
        <th>DATE</th>
        <th>CITY</th>
        <th>VENUE</th>
        <th>ADMIN</th>
    </thead>
    <tbody>
        @foreach($tourdates as $tourdate)
        <tr @if ($tourdate -> review_id) }} class="reviewed" data-review="review-{{ $tourdate -> id }}" @endif >
            <td>{{ DateHelp::formatted_date($tourdate -> date) }}</td>
            <td>{{ $tourdate -> location }}</td>
            <td><a target="_blank" href="{{ $tourdate -> show_info }}">{{ $tourdate -> venue}}@if($tourdate -> support) <span class="support">w/ {{ $tourdate -> support }}</span>@endif</a></td>
            <td><a href="{{ URL::route('admin.tour.edit', $tourdate->id ) }}">Edit</a></td>
        </tr>
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
