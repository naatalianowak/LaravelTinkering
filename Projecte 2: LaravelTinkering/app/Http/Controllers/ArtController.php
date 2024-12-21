<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arts = Art::all();
        return view('art.index', compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('art.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer',
            'style' => 'required|string|max:255',

        ]);

        Art::create($request->all());

        return redirect()->route('art.index')->with('success', 'Obra de arte creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $art = Art::findOrFail($id);
        return view('art.show', compact('art'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Art $art)
    {
        return view('art.edit', compact('art'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Art $art)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer',
            'style' => 'required|string|max:255',
        ]);

        $art->update($request->all());

        return redirect()->route('art.index')->with('success', 'Obra de arte actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Art $art)
    {
        $art->delete();

        return redirect()->route('art.index')->with('success', 'Obra de arte eliminada exitosamente.');
    }
}
