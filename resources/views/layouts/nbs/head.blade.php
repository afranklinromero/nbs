<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--titulo-->
    <title>{{ env('APP_NAME', 'Normas Bolivianas de Salud') }}</title>
    <!--<title>{{ config('app.name', 'NOBOSALUD') }}</title>-->
    <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
    <META NAME="DC.Language" SCHEME="RFC1766" CONTENT="Spanish">
    <META NAME="AUTHOR" CONTENT="sofcruz">
    <META NAME="REPLY-TO" CONTENT="info@nosalud.com">
    <LINK REV="made" href="mailto:info@nosalud.com">
    <META NAME="DESCRIPTION" CONTENT="Aqui encontraras normas bolivianas en salud, para ayudarte en tu trabajo">
    <META NAME="KEYWORDS" CONTENT="medicina,normas bolivianas de salud,salud">
    <META NAME="Resource-type" CONTENT="Document">
    <META NAME="DateCreated" CONTENT="Mon, 11 April 2022 00:00:00 GMT+1">
    <META NAME="Revisit-after" CONTENT="7 days">
    <META NAME="robots" content="ALL">
    </HEAD>
    <!-- META-TAGS generadas por https://metatags.miarroba.com -->

    <!-- Fonts -->
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.15.1-web/css/all.css') }}">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dropzone.css') }}">
    <script src="{{ asset('dropzone.js')}}"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!--<script src="{{asset('js/app.js')}}"></script>-->
    <link rel="icon" href="{{ URL::asset('/img/favicon.png') }}" type="image/x-icon"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LJWQ3NJ1EG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LJWQ3NJ1EG');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->


</head>
