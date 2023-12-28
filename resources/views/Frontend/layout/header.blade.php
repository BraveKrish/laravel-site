<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

    <title>{{ config('app.name') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    {{-- asset or  is a page define function. it calls public folder  --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>

    <!--=================================
        MAIN MENU START
    ==================================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                {{-- <p>{{ config('app.name') }}</p> --}}
                <img src="{{ asset('frontend/images/logo.png') }}" alt="Eduor" class="img-fluid w-100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home <i class="far fa-angle-down"></i></a>
                        {{-- <ul class="tf__droap_menu">
                            <li><a class="active" href="index.html">home 1</a></li>
                            <li><a href="index_2.html">home 2</a></li>
                            <li><a href="index_3.html">home 3</a></li>
                        </ul> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses') }}">courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="tf__droap_menu">
                            {{-- <li><a href="courses_details.html">courses details</a></li> --}}
                            {{-- <li><a href="blog_details.html">blog details</a></li> --}}
                            <li><a href="{{ route('events') }}">event</a></li>
                            <li><a href="{{ route('event.details') }}">event details</a></li>
                            <li><a href="{{ route('teams') }}">team</a></li>
                            <li><a href="{{ route('team.details') }}">team details </a></li>
                            {{-- <li><a href="error.html">error</a></li> --}}
                            {{-- <li><a href="faq.html">FAQs</a></li> --}}
                            <li><a href="{{ route('login') }}">sign in</a></li>
                            <li><a href="{{ route('register') }}">sign up</a></li>
                            {{-- <li><a href="terms_condition.html">terms and condition</a></li> --}}
                            {{-- <li><a href="privacy_policy.html">privacy policy</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link common_btn" href="#">LEARN MORE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=================================
        MAIN MENU END
    ==================================-->

