@extends('layouts.layout')

@section('content')

<form method="POST" action="/requests" enctype="multipart/form-data">


    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

{{--    <label>Owner ID</label>--}}
{{--    <input name="RequestOwnerID" type="number">--}}
{{--    <BR>--}}
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
    <input name="OfferPrice" type="number">
    <BR>

    File Name: <input name="DocumentName" type="text"><BR>
    Any File: <input type="file" name="FilePath">

    <BR>
    <label>Appointment Date</label>
    <input name="AppointmentDate" type="date">
    <BR>
    <lable>Tags</lable>
    <select name="TagID">
        @foreach($tags as $tag)
            <option value="{{ $tag->ID }}">{{ $tag->Name }}</option>
        @endforeach
    </select>
    <BR><BR>

    <button>Create</button>
</form>
@stop

