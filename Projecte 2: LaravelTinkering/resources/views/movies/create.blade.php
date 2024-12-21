@include('layouts.header')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Película</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4 text-blue-700">Agregar Nueva Película</h1>
    <form action="/movies" method="POST" class="space-y-4">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-blue-600">Título:</label>
            <input type="text" name="title" id="title" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese el título de la película">
        </div>

        <div class="mb-4">
            <label for="director" class="block text-sm font-medium text-blue-600">Director:</label>
            <input type="text" name="director" id="director" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese el nombre del director">
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-blue-600">Año:</label>
            <input type="number" name="year" id="year" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese el año de estreno">
        </div>

        <div class="mb-4">
            <label for="genre" class="block text-sm font-medium text-blue-600">Género:</label>
            <select name="genre" id="genre" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                <option value="">Seleccione un género</option>
                <option value="Action">Acción</option>
                <option value="Adventure">Aventura</option>
                <option value="Comedy">Comedia</option>
                <option value="Crime">Crimen</option>
                <option value="Drama">Drama</option>
                <option value="Fantasy">Fantasía</option>
                <option value="Horror">Terror</option>
                <option value="Mystery">Misterio</option>
                <option value="Romance">Romance</option>
                <option value="Sci-Fi">Ciencia Ficción</option>
                <option value="Thriller">Suspenso</option>
                <option value="Western">Western</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-blue-600">Descripción:</label>
            <textarea name="description" id="description" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese una breve descripción de la película"></textarea>
        </div>

        <div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Crear Película
            </button>
        </div>
    </form>
</div>
@include('layouts.footer')
</body>
</html>
