@extends('layouts.admin_master')

@section('content')

<table class="table">
    <thead>
        <th>DATE</th>
        <th>VENUE</th>
        <th>CITY</th>
    </thead>
    <tbody>
        <tr @if ($tourdate -> review_id) }} class="reviewed" data-review="review-{{ $tourdate -> id }}" @endif >
            <td>{{ $tourdate -> date }}</td>
            <td>{{ $tourdate -> location }}</td>
            <td><a target="_blank" href="{{ $tourdate -> show_info }}">{{ $tourdate -> venue}}@if($tourdate -> support) <span class="support">w/ {{ $tourdate -> support }}</span>@endif</a></td>
            <td><a href="{{ URL::route('admin.tour.edit', $tourdate->id ) }}">Edit</a></td>
        </tr>

    </tbody>

</table>

<section class="tour-reviews">
    <blockquote id="review-{{ $tourdate -> id }}" class="tour-review">
        <a href="{{ $tourdate -> review_link }}">
            <p>{{ $tourdate -> review_text }}</p>
            <p class="source italic">{{ $tourdate -> review__source }}</p>
        </a>
    </blockquote>

</section>

@stop