@extends('layouts.layout')

@section('content')
    This is <strong>DASHBOARD</strong> Page
    <BR><BR>
welcome <strong><i>{{ Auth::user()->username }}</i></strong>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="nav-link" type="submit">
            {{ __('Logout') }}
        </button>
    </form>
@stop
