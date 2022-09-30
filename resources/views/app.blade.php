<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Vue JS CRUD Operations in Laravel</title>
    {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" /> --}}
</head>
<body>
    <div id="app">
        {{-- <router-view> </router-view> --}}
        {{-- <example-component></example-component> --}}
        <hr>
        <router-link to="/" class="mx-3">Home</router-link>
        <router-link to="/create">About</router-link>
        <hr>
        <router-view></router-view>
    </div>
    {{-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> --}}
    @vite('resources/js/app.js', 'resources/css/app.css')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>