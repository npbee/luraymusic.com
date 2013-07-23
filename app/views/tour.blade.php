@extends('layouts.master')

@section('content')

<table class="table">
    <thead>
        <th>DATE</th>
        <th>VENUE</th>
        <th>CITY</th>
    </thead>
    <tbody>
        <tr>
            <td>09/28/13</td>
            <td>Ann Arbor, MI</td>
            <td>Canterbury House</td>
        </tr>
    </tbody>

</table>

@stop

@section('footer')
    @include('partials.footer')
@stop