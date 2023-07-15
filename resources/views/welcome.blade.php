<!doctype html>
<html data-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Scripts -->
    @vite('resources/js/app.js')
    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/css/app.scss')
</head>
<body>
    <div id="app"></div>
</body>
</html>