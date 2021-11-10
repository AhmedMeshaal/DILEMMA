@extends('layouts.layout')

@section('content')

    <style>
        .list {
            font-family:sans-serif;
        }
        td {
            padding:10px;
            border:solid 1px #eee;
        }

        input {
            border:solid 1px #ccc;
            border-radius: 5px;
            padding:7px 14px;
            margin-bottom:10px
        }
        input:focus {
            outline:none;
            border-color:#aaa;
        }
        .sort {
            padding:8px 30px;
            border-radius: 6px;
            border:none;
            display:inline-block;
            color:#fff;
            text-decoration: none;
            background-color: #28a8e0;
            height:30px;
        }
        .sort:hover {
            text-decoration: none;
            background-color:#1b8aba;
        }
        .sort:focus {
            outline:none;
        }
        .sort:after {
            display:inline-block;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 5px solid transparent;
            content:"";
            position: relative;
            top:-10px;
            right:-5px;
        }
        .sort.asc:after {
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #fff;
            content:"";
            position: relative;
            top:4px;
            right:-5px;
        }
        .sort.desc:after {
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 5px solid #fff;
            content:"";
            position: relative;
            top:-4px;
            right:-5px;
        }


        body{
            background: #F4F7FD;
        }

        .card-margin {
            margin-bottom: 1.875rem;
            padding: 3.5rem;
        }

        .card {
            border: 0;
            box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
            -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
            -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #ffffff;
            background-clip: border-box;
            border: 1px solid #e6e4e9;
            border-radius: 8px;
        }

        .card .card-header.no-border {
            border: 0;
        }
        .card .card-header {
            background: none;
            padding: 0 0.9375rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            min-height: 50px;
        }
        .card-header:first-child {
            border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
        }
        .card-title {
            text-transform: uppercase;
            background: #B8DCDB;
            font-size: 14px;
            font-weight: 600;
            line-height: 20px;
            padding: 5px 10px;
            margin: 3px 0;
            border-radius: 6px;
        }

        .widget-49 .widget-49-title-wrapper {
            display: flex;
            align-items: center;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-primary {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #edf1fc;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day {
            color: #4e73e5;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month {
            color: #4e73e5;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #fcfcfd;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day {
            color: #dde1e9;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month {
            color: #dde1e9;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-success {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #e8faf8;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day {
            color: #17d1bd;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month {
            color: #17d1bd;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-info {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #ebf7ff;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day {
            color: #36afff;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month {
            color: #36afff;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-warning {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: floralwhite;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day {
            color: #FFC868;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month {
            color: #FFC868;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-danger {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #feeeef;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day {
            color: #F95062;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month {
            color: #F95062;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-light {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #fefeff;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day {
            color: #f7f9fa;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month {
            color: #f7f9fa;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-dark {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #ebedee;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day {
            color: #394856;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month {
            color: #394856;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-base {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f0fafb;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
            color: #68CBD7;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
            color: #68CBD7;
            line-height: 1;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
            display: flex;
            flex-direction: column;
            margin-left: 1rem;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
            color: #3c4142;
            font-size: 14px;
        }

        .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
            color: #B1BAC5;
            font-size: 13px;
        }

        .widget-49 .widget-49-meeting-points {
            font-weight: 400;
            font-size: 13px;
            margin-top: .5rem;
        }

        .widget-49 .widget-49-meeting-points .widget-49-meeting-item {
            display: list-item;
            color: #727686;
        }

        .widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
            margin-left: .5rem;
        }

        .widget-49 .widget-49-meeting-action {
            text-align: right;
        }

        .widget-49 .widget-49-meeting-action a {
            text-transform: uppercase;
        }
        #myInput {
            padding: 20px;
            margin-top: -6px;
            border: 0;
            border-radius: 0;
            background: #f1f1f1;
        }
    </style>



                <div class="container">
                    <div id="users">
                        <BR>
                <form method="POST" action="/tagged/tags" autocomplete="off">

                    @csrf
                    @method('post')

                        <div class="row">
                            <div class="col-md-4">
                                <input name="SearchTagName" id="SearchTagName" type="text" maxlength="255"  placeholder="type a tag">
                            </div>
                            <div class="col-md-4 offset-md-4">
                                <select class="form-control" id="sel1" name="SearchDropDown" id="SearchDropDown">

                                    <option><a href="#"></a> -- Tags Filter -- </option>

                                    @foreach($tagsListAll as $tag)

                                        <option><a href="#">{{ $tag->Name }}</a></option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-4 offset-md-4">
                                <button type="submit" name="Search" id="Search" value="Search" class="btn btn-info mt-4">{{ __('Search') }}</button>
                                <button type="button" name="Clear" id="Clear"  value="Clear" onclick="document.location='/tagged/tags'" class="btn btn-info mt-4">{{ __('Show All Tags') }}</button>
                            </div>
                        </div>
                </form>
                    </div>


                    <div class="row list">

                        <h3 class="mb-0">There are {{ $tagsListAll->total() }} tag/s</h3>
{{--                        @php $counter = 1; if($page_num != "All"){$counter = ((($tagsList->currentPage() - 1) * $page_num) + 1);};  @endphp--}}
                        @foreach($tagList as $tag)

                            <div class="col-lg-4">
                            <div class="card card-margin">
                                <div class="card-header no-border">
                                    <h5 class="card-title"><a href="">{{ $tag->Name }}</a></h5>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="widget-49">
                                        <div class="widget-49-title-wrapper">
                                            <div class="widget-49-date-primary">
                                                <span class="widget-49-date-day">09</span>
                                                <span class="widget-49-date-month">apr</span>
                                            </div>
                                            <div class="widget-49-meeting-info">
                                                <span class="widget-49-pro-title">PRO-08235 DeskOpe. Website</span>
                                                <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                                            </div>
                                        </div>
                                        <ol class="widget-49-meeting-points">
                                            <li class="widget-49-meeting-item"><span>Expand module is removed</span></li>
                                            <li class="widget-49-meeting-item"><span>Data migration is in scope</span></li>
                                            <li class="widget-49-meeting-item"><span>Session timeout increase to 30 minutes</span></li>
                                        </ol>
                                        <div class="widget-49-meeting-action">
                                            <a href="/tagged/tagged_request/{{ $tag->ID }}" class="btn btn-sm btn-flash-border-primary" style="color: #1b8aba;">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach


    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

    <script>
       $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".dropdown-menu li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

       $(document).ready(function() {

           $("#SearchToggle").click(function(){
               $(".clsDivSearch").toggle();

           })

           $( "#SearchMessageDateFrom" ).datepicker({changeYear: true , yearRange: '2010:<?=Date("Y", time())+1?>', dateFormat: 'dd-mm-yy'});
           $( "#SearchMessageDateTo" ).datepicker({changeYear: true , yearRange: '2010:<?=Date("Y", time())+1?>', dateFormat: 'dd-mm-yy'});


       });
    </script>

@stop
