<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request</title>
</head>

<body>

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

</body>

</html>

