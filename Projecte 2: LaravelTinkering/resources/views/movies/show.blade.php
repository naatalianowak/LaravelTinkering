@include('layouts.header')
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 h-screen flex flex-col">
<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-full mx-auto bg-white shadow-md rounded-lg p-4 sm:p-6">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6 sm:mb-8 text-center text-blue-700 uppercase tracking-wide">
            {{ $movie->title }}
        </h2>
        <p><strong>Director:</strong> {{ $movie->director }}</p>
        <p><strong>Año:</strong> {{ $movie->year }}</p>
        <p><strong>Género:</strong> {{ $movie->genre }}</p>
        <p><strong>Descripción:</strong> {{ $movie->description }}</p>
    </div>
</main>
@include('layouts.footer')
</body>
</html>
