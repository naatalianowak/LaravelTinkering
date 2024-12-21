<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="@yield('body-class')">
<header class="bg-white text-black p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Proyecto 2: Laravel Tinkering</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:underline">Inicio</a></li>
                <li><a href="{{ route('art.index') }}" class="hover:underline">Arte</a></li>
                <li><a href="{{ route('movies.index') }}" class="hover:underline">Películas</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>
