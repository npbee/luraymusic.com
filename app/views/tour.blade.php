@extends('layouts.master')

@section('content')

<table class="table">
    <thead>
        <th>DATE</th>
        <th>VENUE</th>
        <th>CITY</th>
    </thead>
    <tbody>
        <tr class="reviewed" data-review="review-1">
            <td>09/28/13</td>
            <td>Ann Arbor, MI</td>
            <td>Canterbury House<span class="support">w/ The Ericksons</span></td>
        </tr>

        <tr class="reviewed" data-review="review-2">
            <td>09/28/13</td>
            <td>Ann Arbor, MI</td>
            <td>Canterbury House</td>
        </tr>

    </tbody>

</table>

<section class="tour-reviews">

    <blockquote id="review-1" class="tour-review">
        <a href="#">
            <p>Her songs are delicate, contemplative folk...Standing up front, there were like-minded fans of this music and the band did a fine job of delivering smooth, involved patterns of thoughtful and focused folk music.</p>
            <p class="source italic">- David Hintz, DC ROCK LIVE</p>
        </a>
    </blockquote>

    <blockquote id="review-2" class="tour-review">
        <a href="#">
            <p>"Instantly, I am impressed with the instrumental choices and arrangements...there is always something cool going on."</p>
            <p class="source italic">- DC ROCK LIVE</p>
        </a>
    </blockquote>

</section>


@stop

@section('footer')
    @include('partials.footer')
@stop