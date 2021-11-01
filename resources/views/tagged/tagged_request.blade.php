@extends('layouts.layout')
<style>
    * {
        box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;
        /*height: 150px; !* Should be removed. Only for demonstration *!*/
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .image-parent {
        max-width: 40px;
    }

    .display-2 {
        text-transform: uppercase;
    }
</style>
@section('content')


    <div class="container">
        <h1 class="display-2">{{ $tag_data->Name }} tag</h1>
        <p><ins>all requests below related to the above tag.</ins></p>
    </div>

    @foreach($tagged_requests as $tagged_request)
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-lg-12">
                    <h6 class="text-muted">Created at -- {{ $tagged_request->DateSubmitted }}</h6>

                    <ul class="list-group list-unstyled row">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <div class="image-parent">
                                <img src="/requests/display-request-image/{{ $tagged_request->ID }}" class="img-fluid" alt="quixote">
                                <BR><BR>
{{--                                <span class="badge badge-info badge-pill">{{ $tagged_request->TagName }}</span>--}}
                            </div>
                            <div class="flex-column">
                                <h3><strong>{{ $tagged_request->RequestSubject }}</strong></h3>
                                <p><small>{{ $tagged_request->RequestDescription }}</small></p>
                            </div>
                        </a>
                    </ul>

                </div>
            </div>
        </div>

    @endforeach
@stop
