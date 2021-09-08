<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request</title>
</head>

<body>

<form method="POST" action="/requests/{{ $request->ID }}">

    @method('PUT')

    @csrf

{{--    <label>ID</label>--}}
{{--    <input type="number" value="{{ $request->ID }}">--}}
{{--    <BR>--}}
    <label>Owner ID</label>
    <input type="number" value="{{ $request->RequestOwnerID }}">
    <BR>
    <label>Subject</label>
    <input type="text" value="{{ $request->RequestSubject }}">
    <BR>
    <label>Description</label>
    <textarea>{{ $request->RequestDescription }}</textarea>
    <BR>
    <label>Status</label>
    <input type="number" value="{{ $request->RequestStatus }}">
    <BR>
    <label>Cost</label>
    <input type="number" value="{{ $request->RequestRangeCost }}">
    <BR>
    <label>Request Date</label>
    <input type="datetime-local" value="{{ $request->RequestDate }}">
    <BR>
    <label>Appointment Date</label>
    <input type="date" value="{{ $request->AppoinmentDate }}">
<BR> <BR>

    <button>UPDATE</button>
</form>

</body>

</html>

