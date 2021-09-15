<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN</title>
</head>

<body>

<div class="row">
<form action="/showLoginForm" method="POST">
    Email: <input type="text" name="email" placeholder="enter email">
    <BR>
    Password: <input type="password" name="password" placeholder="enter password">
    <BR>
    <button type="submit">Sign IN</button>
    <BR>
    <a href="{{ route('auth.register') }}">I have no account, create new</a>
</form>
</div>
</body>

</html>
