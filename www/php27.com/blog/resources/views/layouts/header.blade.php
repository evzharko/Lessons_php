<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/eleganticon.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/navstylechange.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/noneed.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen"/>
    <!-- MAGNIFIC POPUP -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="style.css">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie:400' rel='stylesheet' type='text/css'>
    <!-- FAVICON -->
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

</head>
<body>
@yield('header')
@yield('sliderarea')
@yield('content')
@yield('footerplugin')
@yield('footer')

</body>