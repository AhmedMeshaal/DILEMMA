<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dilemma</title>


{{--INCLUDE BOOTSTRAP/JQUERY/CSS CDN HERE--}}
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    * {
        margin: 0;
        padding: 0;
    }

    a {
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }

    a:hover {
        opacity: 0.7;
    }

    .logo {
        font-size: 24px;
        text-transform: uppercase;
        letter-spacing: 4px;
    }

    nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
        font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;
        background: #23232e;
        height: 8vh;
    }

    main {
        background: url("bg.jpg") no-repeat center center;
        background-size: cover;
        height: 92vh;
    }

    .nav-list {
        list-style: none;
        display: flex;
    }

    .nav-list li {
        letter-spacing: 3px;
        margin-left: 32px;
    }

    .mobile-menu {
        display: none;
        cursor: pointer;
    }

    .mobile-menu div {
        width: 32px;
        height: 2px;
        background: #fff;
        margin: 8px;
        transition: 0.3s;
    }

    @media (max-width: 999px) {
        body {
            overflow-x: hidden;
        }
        .nav-list {
            position: absolute;
            top: 8vh;
            right: 0;
            width: 50vw;
            height: 92vh;
            background: #23232e;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            transform: translateX(100%);
            transition: transform 0.3s ease-in;
        }
        .nav-list li {
            margin-left: 0;
            opacity: 0;
        }
        .mobile-menu {
            display: block;
        }
    }

    .nav-list.active {
        transform: translateX(0);
    }

    @keyframes navLinkFade {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .mobile-menu.active .line1 {
        transform: rotate(-45deg) translate(-8px, 8px);
    }

    .mobile-menu.active .line2 {
        opacity: 0;
    }

    .mobile-menu.active .line3 {
        transform: rotate(45deg) translate(-5px, -7px);
    }
</style>


