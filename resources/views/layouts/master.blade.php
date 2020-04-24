<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="/css/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/ionicons.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  <link rel="icon" type="image/png" href="/images/logo.png" />
  @yield('css')
</head>
<body>
  @include('layouts.preloader')
  @include('layouts.nav')
  @yield('content')
  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/scrollreveal.min.js"></script>
  <script src="/js/main.js"></script>
  @yield('js')
</body>
</html>
