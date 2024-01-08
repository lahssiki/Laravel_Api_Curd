<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $livers = Livre::all();
        return response()->json($livers);
    }

    public function store(Request $request)
    {
        $validated = [
            'titre' => 'required|string',
            'auteur' => 'required|string',
            'edition' => 'required|date',
            'prix' => 'required',
            'description' => 'required|string'
        ];
        $this->validate($request, $validated);
        $livre = Livre::create($request->all());
        return response()->json($livre, 201);
    }
    public function show($id)
    {
        $livre = Livre::find($id);
        return response()->json($livre);
    }

    public function update(Request $request, $id)
    {
        $validated = [
            'titre' => 'required|string',
            'auteur' => 'required|string',
            'edition' => 'required|date',
            'prix' => 'required',
            'description' => 'required|string'
        ];
        $this->validate($request, $validated);
        $livre = Livre::find($id);
        $livre->update($request->all());
        return response()->json($livre, 200);
    }

    public function destroy($id)
    {
        $livre = Livre::find($id);
        $livre->delete();
        return response()->json(null, 204);
    }
}
