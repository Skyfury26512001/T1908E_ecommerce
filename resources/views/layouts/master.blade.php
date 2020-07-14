<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href={{ asset('assets/img/apple-touch-icon-57x57-precomposed.png') }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href={{ asset('assets/img/apple-touch-icon-72x72-precomposed.png') }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href={{ asset('assets/img/apple-touch-icon-114x114-precomposed.png') }}>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href={{ asset('assets/img/apple-touch-icon-144x144-precomposed.png') }}>
	
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href={{ asset('assets/css/bootstrap.custom.min.css') }} rel="stylesheet">

{{--	<link href={{ URL::asset('assets/css/bootstrap.custom.min.css') }} rel="stylesheet">--}}
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href={{ asset('assets/css/home_1.css') }} rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href={{ asset('assets/css/custom.css') }} rel="stylesheet">

</head>

<body>
@yield('content', 'Default Content')

<!-- COMMON SCRIPTS -->
    <script src={{asset('assets/js/common_scripts.min.js')}}></script>
    <script src={{asset('assets/js/main.js')}}></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src={{asset('assets/js/carousel-home.min.js')}}></script>

</body>