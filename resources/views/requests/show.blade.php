@extends('layouts.layout')

@section('content')
<table class="table table-bordered">
    <thead>
    Single Record
    </thead>

    <ul>


        <li>{{ $record->ID }}</li>
        <li>{{ $record->RequestSubject }}</li>
        <li>{{ $record->TagName }}</li>


    </ul>

{{--    <a href="route{{ request_file }}">request image</a>--}}
</table>
@stop
