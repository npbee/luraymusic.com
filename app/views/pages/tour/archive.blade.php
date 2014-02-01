@extends('layouts.master')

@section('content')

<table class="table">
    <thead>
        <th>DATE</th>
        <th>CITY</th>
        <th>VENUE</th>
    </thead>
    <tbody>
        @foreach($tourdates as $tourdate)
                @if($tourdate -> date < date('Y-m-d') )
                    <tr @if ($tourdate -> review_text) class="reviewed" data-review="review-{{ $tourdate -> id }}" @endif data-info="http://google.com">
                        <td>{{ DateHelp::formatted_date($tourdate -> date) }}</td>
                        <td>{{ $tourdate -> location }}</td>
                        <td><a target="_blank" href="{{ $tourdate -> show_info }}">{{ $tourdate -> venue}}</a>@if($tourdate -> support) <span class="support">w/ {{ $tourdate -> support }}</span>@endif</td>
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

<section class="post-content">
    <p class="smallprint">* denotes review</p>
    <p>
        <ul class="breadcrumbs smallprint">
            <li><a href="{{ URL::route('tour') }}">Upcoming Dates</a></li>
            <li><a class="current" href="{{ URL::route('tour-archive') }}">Tour Archive</a></li>
        </ul>
    </p>
</section>


@stop

@section('footer')
    @include('_partials.footer')
@stop