<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .ck-editor__editable {
            min-height: 300px;
        }
    </style>
</head>
<body style="background-size: cover; height:100vh;">
{{-- <body style="background-image: url('https://cdn.pixabay.com/photo/2021/08/25/17/22/flowers-6574079_960_720.jpg'); 
             height: 100vh; background-position: center; background-repeat: no-repeat; background-size: cover;"> --}}
    @include('inc.navbar')
    
        <div class="container mt-">
            @yield('content')
        </div>
    
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    @yield('scripts')
</body>
</html>
