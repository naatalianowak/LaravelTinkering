@include('layouts.header')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Arte</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-50 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4 text-pink-700">Agregar Nueva Obra de Arte</h1>
    <form action="/art" method="POST" class="space-y-4">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-pink-600">Título:</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full border border-pink-300 rounded-md p-2 focus:ring-pink-500 focus:border-pink-500" placeholder="Ingrese el título de la obra de arte">
        </div>

        <div class="mb-4">
            <label for="artist" class="block text-sm font-medium text-pink-600">Artista:</label>
            <input type="text" name="author" id="author" required class="mt-1 block w-full border border-pink-300 rounded-md p-2 focus:ring-pink-500 focus:border-pink-500" placeholder="Ingrese el nombre del artista">
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-pink-600">Año:</label>
            <input type="number" name="year" id="year" required class="mt-1 block w-full border border-pink-300 rounded-md p-2 focus:ring-pink-500 focus:border-pink-500" placeholder="Ingrese el año de creación">
        </div>

        <div class="mb-4">
            <label for="genre" class="block text-sm font-medium text-pink-600">Género:</label>
            <select name="style" id="style" required class="mt-1 block w-full border border-pink-300 rounded-md p-2 focus:ring-pink-500 focus:border-pink-500">
                <option value="">Seleccione un género</option>
                <option value="Barroco">Barroco</option>
                <option value="Renacentismo">Renacentismo</option>
                <option value="Gótico">Gótico</option>
                <option value="Romanticismo">Romanticismo</option>
                <option value="Romanico">Romanico</option>
                <option value="Neoclasicismo">Neoclasicismo</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-pink-600">Descripción:</label>
            <textarea name="description" id="description" required class="mt-1 block w-full border border-pink-300 rounded-md p-2 focus:ring-pink-500 focus:border-pink-500" placeholder="Ingrese una breve descripción de la obra de arte"></textarea>
        </div>

        <div>
            <button type="submit" class="w-full bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">
                Crear Obra de Arte
            </button>
        </div>
    </form>
</div>
@include('layouts.footer')
</body>
</html>
