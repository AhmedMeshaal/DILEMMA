<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request</title>
</head>

<body>

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

    <label>Request Date</label>
    <input name="RequestDate" type="datetime-local" value="{{ $request->RequestDate }}">

    <BR>

    <label>Appointment Date</label>
    <input name="AppoinmentDate" type="date" value="{{ $request->AppoinmentDate }}">
<BR> <BR>

    <button>UPDATE</button>


</form>

</body>

</html>

