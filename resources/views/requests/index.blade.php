<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request</title>
</head>

<body>

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

</body>

</html>
