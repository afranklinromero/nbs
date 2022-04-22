<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--titulo-->
    <title>{{ env('APP_NAME', 'NOBOSALUD: Normas Bolivianas en Salud') }}</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
