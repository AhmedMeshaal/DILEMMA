@extends('layouts.layout')

@section('content')

<body>

<form method="POST" action="/auth/registration">
<div class="row">

    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">


        Name: <input type="text" name="username" placeholder="enter username">
        <BR>
        Email: <input type="text" name="email" placeholder="enter email">
        <BR>
        Password: <input type="password" name="password" placeholder="enter password">
        <BR>
        <button>Sign Up</button>
        <BR>
        <a href="{{ route('auth.showLoginForm') }}">I already have an account, just login</a>
    </form>
</div>
</body>
@stop
