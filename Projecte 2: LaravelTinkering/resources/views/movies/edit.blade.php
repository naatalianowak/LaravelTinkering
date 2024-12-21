@include('layouts.header')
 <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar Película</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-blue-50 p-8">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4 text-blue-700">Modificar Película</h1>
            <form action="{{ route('movies.update', $movie) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-blue-600">Título:</label>
                    <input type="text" name="title" id="title" value="{{ $movie->title }}" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese el título de la película">
                </div>

                <div class="mb-4">
                    <label for="director" class="block text-sm font-medium text-blue-600">Director:</label>
                    <input type="text" name="director" id="director" value="{{ $movie->director }}" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese el nombre del director">
                </div>

                <div class="mb-4">
                    <label for="year" class="block text-sm font-medium text-blue-600">Año:</label>
                    <input type="number" name="year" id="year" value="{{ $movie->year }}" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese el año de estreno">
                </div>

                <div class="mb-4">
                    <label for="genre" class="block text-sm font-medium text-blue-600">Género:</label>
                    <select name="genre" id="genre" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Seleccione un género</option>
                        <option value="Action" {{ $movie->genre == 'Action' ? 'selected' : '' }}>Acción</option>
                        <option value="Adventure" {{ $movie->genre == 'Adventure' ? 'selected' : '' }}>Aventura</option>
                        <option value="Comedy" {{ $movie->genre == 'Comedy' ? 'selected' : '' }}>Comedia</option>
                        <option value="Crime" {{ $movie->genre == 'Crime' ? 'selected' : '' }}>Crimen</option>
                        <option value="Drama" {{ $movie->genre == 'Drama' ? 'selected' : '' }}>Drama</option>
                        <option value="Fantasy" {{ $movie->genre == 'Fantasy' ? 'selected' : '' }}>Fantasía</option>
                        <option value="Horror" {{ $movie->genre == 'Horror' ? 'selected' : '' }}>Terror</option>
                        <option value="Mystery" {{ $movie->genre == 'Mystery' ? 'selected' : '' }}>Misterio</option>
                        <option value="Romance" {{ $movie->genre == 'Romance' ? 'selected' : '' }}>Romance</option>
                        <option value="Sci-Fi" {{ $movie->genre == 'Sci-Fi' ? 'selected' : '' }}>Ciencia Ficción</option>
                        <option value="Thriller" {{ $movie->genre == 'Thriller' ? 'selected' : '' }}>Suspenso</option>
                        <option value="Western" {{ $movie->genre == 'Western' ? 'selected' : '' }}>Western</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-blue-600">Descripción:</label>
                    <textarea name="description" id="description" required class="mt-1 block w-full border border-blue-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese una breve descripción de la película">{{ $movie->description }}</textarea>
                </div>

                <div>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Actualizar Película
                    </button>
                </div>
            </form>
        </div>

    @include('layouts.footer')
    </body>
    </html>
