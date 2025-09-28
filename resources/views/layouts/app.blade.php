<!DOCTYPE html>
<html lang="de" class="scroll-smooth h-full">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Appartments Moser')</title>
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/header.js'])
</head>
<body class="m-0 min-h-screen flex flex-col antialiased bg-white  text-gray-800">

{{-- Header --}}
@yield('header')


<main class="flex-1 bg-white pt-6">
    @yield('content')
</main>

{{-- Footer --}}
@yield('footer')

@stack('scripts')
</body>
</html>
