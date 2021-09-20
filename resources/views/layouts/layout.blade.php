<!doctype html>
<html>
<head>
{{--    <div class="wrapper">--}}
    @include('includes.head')
{{--    </div>--}}
</head>
<body>
<div class="wrapper">
    <header>
        @include('includes.header')
    </header>
    <div>
        @yield('content')
    </div>
    <BR><BR>
    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
