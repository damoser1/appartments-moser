<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Appartments Moser')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('scripts')
</head>
<body class="bg-white text-gray-800">
@yield('header')

<main class="bg-white pt-6">
    @yield('content')
</main>
</body>
</html>
