<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel='shortcut icon' href="{{asset('images/logos/favicon.png')}}" type='image/png' />
    <link rel='icon' href="{{asset('images/logos/favicon.png')}}" type='image/png' />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">    

    <!-- Styles -->
    <link rel="stylesheet" href=" {{ asset('css/materialize.min.css')}} ">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts/navbar.css') }}" rel="stylesheet">
   <link href="{{ asset('css/layouts/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/empresa.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/contacto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/servicios.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/novedad.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page/calidad.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/icons/fontawesome/css/all.css') }}" rel="stylesheet">

    <script>
        document.__API_URL = '{{ url('/') }}';
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <style>
        @media only screen and (max-width: 600px) {
            .slides{
                height: 300px !important;
            }
            .slider{
                height: 320px !important;
            }
            .caption{
                padding: 0 !important;
                width: 50% !important;
            }
            #descripcion-caption p{
                font-size: 25px !important;
            }
        }
    </style>
</head>
<body>


</body>