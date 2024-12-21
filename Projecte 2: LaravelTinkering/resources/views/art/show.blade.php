@include('layouts.header')
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $art->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-50 h-screen flex flex-col">
<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-full mx-auto bg-white shadow-md rounded-lg p-4 sm:p-6">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6 sm:mb-8 text-center text-pink-700 uppercase tracking-wide">
            {{ $art->name }}
        </h2>
        <p><strong>Artista:</strong> {{ $art->author }}</p>
        <p><strong>Año:</strong> {{ $art->year }}</p>
        <p><strong>Estilo:</strong> {{ $art->style }}</p>
        <p><strong>Descripción:</strong> {{ $art->description }}</p>
    </div>
</main>
@include('layouts.footer')
</body>
</html>
