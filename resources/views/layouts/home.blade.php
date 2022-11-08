<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Samir Mammadov">
    <title>E-SHOP HTML Template</title>

    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

@include('home._header')
<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
      @include('home.category')
      @include('home.menu')
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->

@yield('content')


@include('home.footer')


</body>
</html>

