@extends('layouts.layout')

@section('content')

<form method="POST" action="/requests">


    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <label>Owner ID</label>
    <input name="RequestOwnerID" type="number">
    <BR>
    <label>Subject</label>
    <input name="RequestSubject" type="text">
    <BR>
    <label>Description</label>
    <textarea name="RequestDescription"></textarea>
    <BR>
    <label>Status</label>
    <input name="RequestStatus" type="number">
    <BR>
    <label>Cost</label>
    <input name="RequestRangeCost" type="number">
    <BR>
    <label>Request Date</label>
    <input name="RequestDate" type="datetime-local">
    <BR>
    <label>Appointment Date</label>
    <input name="AppoinmentDate" type="date">
    <BR> <BR>

    <button>Create</button>
</form>
@stop

