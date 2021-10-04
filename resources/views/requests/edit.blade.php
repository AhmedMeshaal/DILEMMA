@extends('layouts.layout')

@section('content')
<form method="POST" action="/requests/update/{{ $request_id }}" name="frmName" id="frmName">

    @method('POST')
    @csrf

    <label>Owner ID</label>
    <input name="RequestOwnerID" type="number" value="{{ $request->RequestOwnerID }}">

    <BR>

    <label>Subject</label>
    <input name="RequestSubject" type="text" value="{{ $request->RequestSubject }}">

    <BR>

    <label>Description</label>
    <textarea name="RequestDescription">{{ $request->RequestDescription }}</textarea>

    <BR>

    <label>Status</label>
    <input name="RequestStatus" type="number" value="{{ $request->RequestStatus }}">

    <BR>

    <label>Cost</label>
    <input name="RequestRangeCost" type="number" value="{{ $request->RequestRangeCost }}">

    <BR>

{{--    <label>Request Date</label>--}}
{{--    <input name="RequestDate" type="datetime-local" value="{{ $request->RequestDate }}">--}}

    <BR>

    <label>Appointment Date</label>
    <input name="AppoinmentDate" type="date" value="{{ $request->AppoinmentDate }}">
    <BR>

    <label>Tag Name</label>
    <select name="TagID">
        @foreach($tags as $tag)
            <option value="{{ $tag->ID }}">{{ $tag->Name }}</option>
        @endforeach
    </select>

    <BR>
    <BR>

    <button>UPDATE</button>


</form>

@stop
