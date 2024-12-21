@include('layouts.header')
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 h-screen flex flex-col">
<main class="flex-grow p-4 sm:p-8">
    <div class="max-w-full mx-auto bg-white shadow-md rounded-lg p-4 sm:p-6">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6 sm:mb-8 text-center text-blue-700 uppercase tracking-wide">
            <span class="bg-blue-100 px-3 py-1 sm:px-4 sm:py-2 rounded-lg shadow-sm">Películas</span>
        </h2>

        <div class="bg-blue-100 p-4 rounded-lg mb-6">
            <div class="flex justify-center gap-2">
                <a href="{{ route('movies.create') }}" class="bg-blue-600 text-white px-3 py-1 sm:px-4 sm:py-2 rounded hover:bg-blue-700 font-bold text-sm sm:text-base">AGREGAR</a>
                <a href="#" class="bg-blue-500 text-white px-3 py-1 sm:px-4 sm:py-2 rounded hover:bg-blue-600 font-bold text-sm sm:text-base" onclick="editSelected()">EDITAR</a>
            </div>
        </div>

        <div class="hidden md:block overflow-x-auto">
            <table class="w-full bg-white border border-blue-200">
                <thead>
                <tr class="bg-blue-100 text-blue-700 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">SELECCIONAR</th>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">TÍTULO</th>
                    <th class="py-3 px-6 text-left">DIRECTOR</th>
                    <th class="py-3 px-6 text-left">AÑO</th>
                    <th class="py-3 px-6 text-left">GÉNERO</th>
                    <th class="py-3 px-6 text-left">DESCRIPCIÓN</th>
                    <th class="py-3 px-6 text-left">ACCIONES</th>
                </tr>
                </thead>
                <tbody class="text-blue-600 text-sm font-light">
                @foreach($movies as $movie)
                    <tr>
                        <td class="py-3 px-6 text-left"><input type="checkbox" name="selected" value="{{ $movie->id }}"></td>
                        <td class="py-3 px-6 text-left">{{ $movie->id }}</td>
                        <td class="py-3 px-6 text-left">
                            <a href="{{ route('movies.show', $movie->id) }}" class="text-blue-500 hover:underline">{{ $movie->title }}</a>
                        </td>
                        <td class="py-3 px-6 text-left">{{ $movie->director }}</td>
                        <td class="py-3 px-6 text-left">{{ $movie->year }}</td>
                        <td class="py-3 px-6 text-left">{{ $movie->genre }}</td>
                        <td class="py-3 px-6 text-left">{{ $movie->description }}</td>
                        <td class="py-3 px-6 text-left">
                            <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="md:hidden space-y-4">
            @foreach($movies as $movie)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold">
                        <a href="{{ route('movies.show', $movie->id) }}" class="text-blue-500 hover:underline">{{ $movie->title }}</a>
                    </h3>
                    <p>Director: {{ $movie->director }}</p>
                    <p>Año: {{ $movie->year }}</p>
                    <p>Género: {{ $movie->genre }}</p>
                    <p>Descripción: {{ $movie->description }}</p>
                    <div class="flex justify-between mt-4">
                        <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

<script>
    function editSelected() {
        const selectedCheckboxes = document.querySelectorAll('input[name="selected"]:checked');
        if (selectedCheckboxes.length === 1) {
            const movieId = selectedCheckboxes[0].value;
            window.location.href = `{{ url('movies') }}/${movieId}/edit`;
        } else {
            alert('Por favor, selecciona una sola película para editar.');
        }
    }
</script>
@include('layouts.footer')
</body>
</html>
