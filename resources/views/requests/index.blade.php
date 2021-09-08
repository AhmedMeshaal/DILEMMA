<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request</title>
</head>

<body>

    @foreach($requests as $request)

    <ul>
        <li><strong>ID</strong> <span>{{ $request->ID }}</span></li>
        <li><strong>Owner ID</strong> <span>{{ $request->RequestOwnerID }}</span></li>
        <li><strong>Request Subject</strong> <span>{{ $request->RequestSubject }}</span></li>
        <li><strong>Request Description</strong> <span>{{ $request->RequestDescription }}</span></li>
        <li><strong>Request Status</strong> <span>{{ $request->RequestStatus }}</span></li>
        <li><strong>Request Cost</strong> <span>{{ $request->RequestRangeCost }}</span></li>
        <li><strong>Request Date</strong> <span>{{ $request->RequestDate }}</span></li>
        <li><strong>Request Appointment Date</strong> <span>{{ $request->AppoinmentDate }}</span></li>
    </ul>
    @endforeach

</body>

</html>
