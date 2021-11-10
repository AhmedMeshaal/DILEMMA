@extends('layouts.layout')

@section('content')


<body class="bg-light">
<div class="container">
    <main>
        <div class="py-5">
{{--            <img class="d-block mx-auto mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9AZ8gC1eOFGKGG42voewVv1V4MJ0AtD9EYA&usqp=CAU" alt="" width="152" height="107">--}}
            <h2 style="text-transform: uppercase;">Login</h2>
        </div>

        <div class="row g-5">

            <div class="col-md-7 col-lg-8">

                <form action="{{ route('login') }}" method="POST">

                    @csrf

                    <div class="row g-3">

                        <div class="col-8">
                            <label for="username" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" name="email" id="email" placeholder="you@example.com">
                            </div>
                        </div>

                        <div class="col-8">
                            <label for="password" class="form-label">Password </label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="enter password">
                        </div>

                    </div>
                <BR ID="break">
                    <button class="w-30 btn btn-primary btn-md" type="submit">Click to Login</button>
                </form>


                <BR> <BR>
            </div>
        </div>
    </main>

</div>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="form-validation.js"></script>


</body>
@stop
