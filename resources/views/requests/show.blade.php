<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request</title>
</head>

<body>

<div class="row">

</div>
<table class="table table-bordered">
    <thead>
    Single Record
    </thead>

    <ul>
        <li>{{ $arrRecordData->ID }}</li>
        <li>{{ $arrRecordData->RequestOwnerID }}</li>
        <li>{{ $arrRecordData->RequestSubject }}</li>
        <li>{{ $arrRecordData->RequestDescription }}</li>
        <li>{{ $arrRecordData->RequestStatus }}</li>
        <li>{{ $arrRecordData->RequestRangeCost }}</li>
        <li>{{ $arrRecordData->RequestDate }}</li>
        <li>{{ $arrRecordData->AppoinmentDate }}</li>
    </ul>

</table>

</body>

</html>

