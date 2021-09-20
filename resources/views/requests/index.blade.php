@extends('layouts.layout')

@section('content')
    @foreach($records as $record)

    <ul>
        <li><strong>ID</strong> <span>{{ $record->ID }}</span></li>
        <li><strong>Owner ID</strong> <span>{{ $record->RequestOwnerID }}</span></li>
        <li><strong>Request Subject</strong> <span>{{ $record->RequestSubject }}</span></li>
        <li><strong>Request Description</strong> <span>{{ $record->RequestDescription }}</span></li>
        <li><strong>Request Status</strong> <span>{{ $record->RequestStatus }}</span></li>
        <li><strong>Request Cost</strong> <span>{{ $record->RequestRangeCost }}</span></li>
        <li><strong>Request Date</strong> <span>{{ $record->RequestDate }}</span></li>
        <li><strong>Request Appointment Date</strong> <span>{{ $record->AppoinmentDate }}</span></li>
    </ul>
    @endforeach

@stop
