@extends('layouts.layout')

@section('content')
<body>

{{--<div class="row">--}}
<form action="{{ route('login') }}" method="POST">
    @csrf
    Email: <input type="text" name="email" placeholder="enter email">
    <BR>
    Password: <input type="password" name="password" placeholder="enter password">
    <BR>
    <button type="submit">Sign IN</button>
    <BR>
    <a href="{{ route('auth.register') }}">I have no account, create new</a>
</form>
{{--</div>--}}
</body>
@stop
