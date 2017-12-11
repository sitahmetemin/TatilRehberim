<!DOCTYPE html>
<html dir="/assets/theme/ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/assets/theme/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/theme/style.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/theme/css/swiper.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/theme/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/theme/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/theme/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/assets/theme/css/magnific-popup.css" type="text/css"/>

    <!-- Select-Boxes CSS -->
    <link rel="stylesheet" href="/assets/theme/css/components/select-boxes.css" type="text/css" />


    <!-- Star Rating CSS -->
    <link rel="stylesheet" href="/assets/theme/css/components/bs-rating.css" type="text/css" />


    <!-- Range Slider CSS -->
    <link rel="stylesheet" href="/assets/theme/css/components/ion.rangeslider.css" type="text/css" />


    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href="/assets/theme/css/components/bs-switches.css" type="text/css" />

    <!-- Radio Checkbox Plugin -->
    <link rel="stylesheet" href="/assets/theme/css/components/radio-checkbox.css" type="text/css" />

    @yield('css')
    <link rel="stylesheet" href="/assets/theme/css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>Tatil Rehberim</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo" data-dark-logo="/assets/theme/images/logo-dark.png"><img src="/assets/theme/images/logo.png" alt="Logo"></a>
                    <a href="/" class="retina-logo" data-dark-logo="/assets/theme/images/logo-dark@2x.png"><img src="/assets/theme/images/logo@2x.png" alt="Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li>
                            <a class="active" href="/">
                                <div>Anasayfa</div>
                            </a>
                        </li>
                        <li>
                            <a href="/tatil-bul">
                                <div>Tatil Bul</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#otelModal">
                                <div>Otel Ara</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#mekanModal">
                                <div>Tatil Yerleri</div>
                            </a>
                        </li>
                    </ul>

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="/ara" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Kelimeni yaz &amp; Enter'a bas">
                        </form>
                    </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>


    </header><!-- #header end -->