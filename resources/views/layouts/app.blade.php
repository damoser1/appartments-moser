<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Appartments Moser')</title>
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/header.js'])
</head>
<body class="bg-white text-gray-800">
@yield('header')

<main class="bg-white pt-6">
    @yield('content')
</main>

@stack('scripts')
</body>
</html>
