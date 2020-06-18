<?php
use App\Plugins\changeLanguage;

$lang=new changeLanguage();
$lang->languageDedect();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('homepage/')}}/img/AYOS - WT.png" rel="icon">
    <link href="{{asset('homepage/')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{asset('homepage/')}}/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('homepage/')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('homepage/')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('homepage/')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('homepage/')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('homepage/')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('homepage/')}}/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('homepage/')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('homepage/')}}/css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Reveal
      Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body id="body">


<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="{{asset('homepage/')}}/#body" class="scrollto">AYOS<span> MEDYA</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{asset('homepage/')}}/#body"><img src="{{asset('homepage/')}}/img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="nav-item">   <a class="nav-link" href="{{route('homepage')}}">Anasayfa</a>
                </li>

                @foreach ($pages as $page)
                    @if($page->status==1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page',$page->slug)}}">{{$page->title}}</a>
                        </li>
                    @endif
                @endforeach
                <a class="nav-link" href="{{route('contact')}}">İletişim</a>
                @if(Session::get('locale')=='en')   <a class="nav-link" href="{{route('changeLanguage','tr')}}">TR</a> @else <a class="nav-link" href="{{route('changeLanguage','en')}}">EN</a> @endif

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>
<main id="main">

