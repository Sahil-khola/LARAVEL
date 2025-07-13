<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f2f2f2;
        }

        header {
            background-color: #b48484;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        li {
            margin: 0 10px;
        }
        a {
            text-decoration: none;
            color: #fff;
        }
        footer {
            background-color: #b48484;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Log In</a></li>
            </ul>
        </nav>
    </header>
@section("contant") 
@show
    <footer>
        copyright @ 2025
    </footer>
</body>
</html>
