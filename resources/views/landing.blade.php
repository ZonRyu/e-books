<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>E-Book</title>
</head>
<body class="body">
    <div class="container">
        <div class="navbar">
            <nav class="nav-navbar">
                <div class="logo-wik">
                    <div class="logo">WIKBOOK</div>
                </div>
                <div class="link-nav-navbar">
                    <li>
                        <ul><a href="/">Home</a></ul>
                        <ul class="btn-login"><a href="/login">Login</a></ul>
                    </li>
                </div>
            </nav>
        </div>
        <div class="container nav-navbar">
            <div class="container head-land">
                <div class="title-land">
                    <h1>Better Solutions For Your Choice Books</h1>
                </div>
                <div class="sub-title-land">
                    <p>We can  access book for online and free!</p>
                </div>
                <div class="some-btn-land">
                    <a href="/register"><button class="btn-reg-land">Register</button></a>
                    <a href=""><button class="btn-vid-land"><i class="bi bi-play-btn">Watch Video</i></button></a>
                </div>
            </div>
            <img class="img-logo" src="{{ asset('assets/img/land-img.png') }}">
        </div>
    </div>
</body>
</html>