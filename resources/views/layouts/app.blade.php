<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'My Blog' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-50">
    <x-header />
    <x-nav />
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>
