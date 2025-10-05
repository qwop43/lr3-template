<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'My Blog' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-header />
    <x-nav />
    <main>@yield('content')</main>
    <x-footer />
</body>
</html>
