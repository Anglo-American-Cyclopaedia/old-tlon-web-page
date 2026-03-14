<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie lang_0" id="html"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie lang_0" id="html"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie lang_0" id="html"> <![endif]-->
<!--[if gt IE 8]> <!-->
<html class="no-js ie9 lang_0" id="html">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <!--
  =============================================================================
  === PLANTILLA DESARROLLADA POR LA OFICINA DE MEDIOS DIGITALES - UNIMEDIOS ===
  =============================================================================
  -->

  <!-- base href="http://subdominio.unal.edu.co/" -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">


  <meta name="revisit-after" content="1 hour">
  <meta name="distribution" content="all">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes">
  <meta name="expires" content="1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="all">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/unal.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/tablet.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/phone.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/small.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/printer.css') }}" media="print">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/tlon.css') }}" media="all">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



  <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
  <!--[if lt IE 9]><script src="{{ asset('js/html5shiv.js') }}" type="text/javascript"></script><![endif]-->
  <!--[if lt IE 9]><script src="{{ asset('js/respond.js') }}" type="text/javascript"></script><![endif]-->


  <title>Inicio: Universidad Nacional de Colombia</title>
</head>

<body>
  @include('partials.header')
  @include('partials.services')
  <div class="home-image"></div>
  <main class="detalle bg-clear">
    @yield('content')
  </main>
  @include('partials.footer')
  <script src="{{ asset('js/unal.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
</body>

</html>
