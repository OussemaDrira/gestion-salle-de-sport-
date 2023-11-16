<?php

namespace App\Http\Controllers;

use App\Models\CourEntrenement;
use Illuminate\Http\Request;

class CourEntrenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CourEntrenement::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $courEntrenement = new CourEntrenement([
            'nomCour' => $request->input('nomCour'),
            'duree' => $request->input('duree'),
            'description' => $request->input('description'),
            ]);
        $courEntrenement->save();
        console.log($courEntrenement);
        return response()->json($courEntrenement, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(CourEntrenement $courEntrenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourEntrenement $courEntrenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourEntrenement $courEntrenement)
    {
        //
    }
}
