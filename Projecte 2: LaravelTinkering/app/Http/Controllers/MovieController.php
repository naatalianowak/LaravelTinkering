<?php

namespace App\Http\Controllers;

use App\Models\Movie; // Asegúrate de tener el modelo Movie
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all(); // Obtener todos los registros de películas
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Movie::create($request->all()); // Crear un nuevo registro de película
        return redirect()->route('movies.index')->with('success', 'Película creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $movie->update($request->all()); // Actualizar el registro de película
        return redirect()->route('movies.index')->with('success', 'Película actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete(); // Eliminar el registro de película
        return redirect()->route('movies.index')->with('success', 'Película eliminada exitosamente.');
    }
}
