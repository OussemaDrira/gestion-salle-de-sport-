<?php

namespace App\Http\Controllers;

use App\Models\Entreneur;
use Illuminate\Http\Request;

class EntreneurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Entreneur::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $entreneur = new Entreneur([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'adresse' => $request->input('adresse'),
            'telephone' => $request->input('telephone'),
            'sepecialite' => $request->input('sepecialite')
            ]);
        $entreneur->save();
        console.log($entreneur);
        return response()->json($entreneur, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreneur $entreneur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreneur $entreneur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreneur $entreneur)
    {
        //
    }
}
