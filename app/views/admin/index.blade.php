@extends('layouts.admin_master')

@section('content')

    <h1>Hello, {{ Sentry::getUser()->first_name }}!</h1>
    <p>Welcome to the admin page.  Please select an option from the menu!</p>

@stop