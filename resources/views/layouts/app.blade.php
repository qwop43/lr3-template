<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'My Blog' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <x-header />
    <x-nav />
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>
