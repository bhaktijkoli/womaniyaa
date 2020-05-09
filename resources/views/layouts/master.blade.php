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
  @livewireStyles
  <link rel="icon" type="image/png" href="/images/logo.png" />
  @yield('css')
</head>
<body>
  @include('layouts.preloader')
  @include('layouts.nav')
  @yield('content')
  <df-messenger
  intent="WELCOME"
  chat-title="Womaniyaa"
  chat-icon="{{asset('/img/chat_logo.png')}}"
  agent-id="4ccd1726-09f0-4ea4-a5c0-4e3026e39eb4"
  language-code="en"
  ></df-messenger>
  @include('layouts.footer')
  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/scrollreveal.min.js"></script>
  <script src="/js/main.js"></script>
  @livewireScripts
  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  @yield('js')
</body>
</html>
