@extends('layouts.layout')


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<script>
    $( function() {
        $( "#datepicker" ).datepicker({
            altField: "#WrittenDate",
            altFormat: "DD, d MM, yy"
        });
    } );
</script>

<style>
        form {
            border: 1px solid #23232e;
            border-radius: 5px;
            margin: 40px 20px;
            padding: 15px 10px 15px 10px;
            background-color: #EBF5FB;
        }

        form div {
            border-radius: 5px;
        }

        .borderless td, .borderless th {
            border: none !important;
        }

        table td {
            border-top: none !important;
        }

        table thead tr th {
            border-bottom: none !important;
        }

</style>
@section('content')

<form method="POST" action="/requests" enctype="multipart/form-data">

    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="p-3 mb-2 bg-info text-white"><h2>Create New Request</h2></div><BR><BR>

    <table class="table table-borderless">

        <tbody>
        <thead>
        <tr>
            <th scope="col">Subject</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tr>
            <td>
                <input class="form-control" type="text" name="RequestSubject" type="text" placeholder="Enter Subject">
            </td>
            <td>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="RequestDescription" placeholder="Enter Description"></textarea>
            </td>
            <td>
                <input class="form-control" type="number" name="RequestStatus" type="number">
            </td>
        </tr>

        <thead>
        <tr>
            <th scope="col">Cost</th>
            <th scope="col">Upload File</th>
            <th scope="col">Appointment</th>
        </tr>
        </thead>

        <tr>
            <td>
                <input class="form-control" name="OfferPrice" type="number" placeholder="Enter Cost">
            </td>
            <td>
                <div class="mb-3">
                    <input class="form-control" name="DocumentName" type="text" placeholder="File Name">
                    <BR>
                    <input class="form-control" type="file" id="formFile" name="FilePath">
                </div>
            </td>
            <td>
                <input class="form-control" name="AppointmentDate" type="text" id="datepicker">&#xA0;<input class="form-control" type="text" id="WrittenDate" name="WrittenDate" size="30"></p>
            </td>
        </tr>

        <thead>
        <tr>
            <th scope="col">Tags</th>
        </tr>
        </thead>

        <tr>
            <td>
                    <select name="TagID" class="form-select" aria-label="select tags">
                        <option selected>Open this tags menu</option>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->ID }}">{{ $tag->Name }}</option>
                        @endforeach
                    </select>
            </td>
        </tr>

        </tbody>
    </table>

    <button class="btn btn-success">Create</button>



</form>


@stop

