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


    <label>Owner ID</label>
    <input type="number">
    <BR>
    <label>Subject</label>
    <input type="text">
    <BR>
    <label>Description</label>
    <textarea></textarea>
    <BR>
    <label>Status</label>
    <input type="number">
    <BR>
    <label>Cost</label>
    <input type="number">
    <BR>
    <label>Request Date</label>
    <input type="datetime-local">
    <BR>
    <label>Appointment Date</label>
    <input type="date">
    <BR> <BR>

    <button>Create</button>
</form>

</body>

</html>

