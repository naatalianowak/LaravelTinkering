<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .shining-text {
            background: linear-gradient(90deg, #ff9a9e, #fad0c4, #fad0c4, #ff9a9e);
            background-size: 200% 200%;
            animation: shine 5s ease-in-out infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes shine {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
    </style>
</head>
<body class="bg-pink-50 h-screen flex flex-col">

<main class="flex-grow flex flex-col justify-center items-center">
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-12 text-center shining-text uppercase tracking-wide">
        Base de Datos <br>de Películas <br> y Arte
    </h1>

    <div class="flex flex-col justify-center items-center space-y-6 w-full max-w-md">
        <a href="{{ route('movies.index') }}" class="bg-white hover:bg-pink-100 text-pink-700 font-bold py-4 px-8 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 w-full text-center text-2xl">
            PELÍCULAS
        </a>
        <a href="{{ route('art.index') }}" class="bg-white hover:bg-pink-100 text-pink-700 font-bold py-4 px-8 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 w-full text-center text-2xl">
            OBRAS DE ARTE
        </a>
        <a href="https://usagif.com/wp-content/uploads/gif/felizspchr-52.gif" class="bg-white hover:bg-pink-100 text-pink-700 font-bold py-4 px-8 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 w-full text-center text-2xl">
            SORPRESA
        </a>
    </div>
</main>
@include('layouts.footer')

</body>
</html>
