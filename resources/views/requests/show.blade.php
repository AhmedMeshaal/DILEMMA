@extends('layouts.layout')

@section('content')
<table class="table table-bordered">
    <thead>
    Single Record
    </thead>

    <ul>
        <li>{{ $arrRecordData->ID }}</li>
{{--        <li>{{ $arrRecordData->RequestOwnerID }}</li>--}}
        <li>{{ $arrRecordData->RequestSubject }}</li>
        <li>{{ $arrRecordData->RequestDescription }}</li>
        <li>{{ $arrRecordData->RequestStatus }}</li>
{{--        <li>{{ $arrRecordData->RequestRangeCost }}</li>--}}
{{--        <li>{{ $arrRecordData->RequestDate }}</li>--}}
{{--        <li>{{ $arrRecordData->AppoinmentDate }}</li>--}}
        <li><img src="/requests/display-request-image/{{ $arrRecordData->ID }}"></li>
    </ul>

{{--    <a href="route{{ request_file }}">request image</a>--}}
</table>
@stop
