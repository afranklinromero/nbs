<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Normas Bolivianas de Salud') }}</title>

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
</head>
