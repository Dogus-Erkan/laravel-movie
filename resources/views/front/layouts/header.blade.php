<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("front/") }}/css/main.css">
    <link rel="stylesheet" href="{{ asset("front/") }}/css/bootstrap.min.css">
    <link href="{{ asset("front/") }}/fontawesome/css/all.css" rel="stylesheet">
    <!-- Owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                    
                    <a href="{{ route('homepage') }}" class="logo-text">
                        Film <span class="main-color">Sitesi</span> 
                    </a>

                <ul class="nav-menu" id="nav-menu">
                    <li><a href="{{ route('homepage') }}">Anasayfa</a></li>
                    <li><a href="#">Genre</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Series</a></li>
                    <li><a href="#">About</a></li>

                </ul>
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>