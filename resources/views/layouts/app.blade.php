<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Appartments Moser')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/header.js')
</head>
<body class="bg-gray-50 text-gray-800">
<x-header />

<main class="mt-6">
    @yield('content')
</main>
</body>
</html>
