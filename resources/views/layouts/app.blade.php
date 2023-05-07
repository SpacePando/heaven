<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heaven</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .texttitle { 
            margin-top: 50px;
        }
        .video{
            max-width: 350px;
            margin-right: 20px;
            margin-left: 20px;
            margin-bottom: 20px;
        }
        .flex{
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 200px;
            justify-content: center;
        }
        /* .full-height {
            height: 100vh;
        } */
        /* .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        } */
        .content {
            text-align: center;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        footer {
            background: #eee;
            padding: 20px;
            text-align: center;
        }
        .title {
            font-size: 50px;
            text-transform: uppercase;
            border-bottom: 2px solid;
            padding: 12px 0;
            color: #1f0dc3;
        }
        .wrapper {
            max-width: 1140px;
            padding: 10px;
            margin: 20px auto;
        }
        /* create pizza form */
        .create-pizza {
            background: #f7f7f7;
            padding: 20px;
        }
        .create-pizza label, .create-pizza select {
            display: block;
        }
        .create-pizza label {
            margin-top: 30px;
        }
        .create-pizza select {
            padding: 8px;
            width: 200px;
        }
        .create-pizza input[type=checkbox] {
            margin: 10px;
        }
        .create-pizza input[type=submit] {
            background: #1f0dc3;
            padding: 8px 20px;
            color: #fff;
            border: 0;
            margin-top: 20px;
        }
        .create-pizza fieldset {
            border: 0;
        }
        /* pizza details page */
        .pizza-details {
            background: #f7f7f7;
            padding: 20px;
        }
        .pizza-details p {
            margin: 20px 0;
            font-weight: bold;
        }
        .pizza-details button {
            background: #1f0dc3;
            padding: 8px 20px;
            color: #fff;
            border: 0;
            margin-top: 20px;
        }
        a.back {
            display: block;
            text-align: center;
            margin-top: 30px;
            color: #1f0dc3;
            margin-bottom: 20px;
        }
        /* pizza index page */
        .pizza-index h1 {
            margin-bottom: 40px;
        }
        .pizza-index .pizza-item {
            margin: 10px 0;
            padding: 12px;
            background: #f4f4f4;
        }
        .pizza-index .pizza-item img {
            width: 60px;
            display: inline-block;
        }
        .pizza-index .pizza-item h4 {
            display: inline-block;
            font-weight: normal;
            margin-left: 20px;
        }
        .pizza-index .pizza-item h4 a {
            color: #777;
            text-decoration: none !important;
        }
        img {
            max-width: 50%;
        }
        .link-item a {
            color: #777;
            text-decoration: none !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ URL('/') }}">Heavenly Suites</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    <div class="container">
        @yield('content')
    </div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>