<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\TrainType; //get the types for create a new train

class TrainController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = "Estos son los trenes existentes";
        
        $trains = Train::all();

        return view('trains/index',
         ['message' => $message, 'trains' => $trains]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $train_types = TrainType::all();
        return view('trains/create', ['train_types' => $train_types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $train = new Train;
        $train -> name = $request -> input('name');
        $train -> passengers = $request -> input('passengers');
        $train -> year = $request -> input('year');
        $train -> train_type_id = $request -> input('type');

        $train -> save();

        return redirect('trains');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $train = Train::find($id);

        return view('trains/show', ['train'=>$train]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $plato = Plato::find($id);

        // return view('platos/edit', ['plato'=>$plato]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $plato = Plato::find($id);
        
        // $plato -> nombre = $request -> input('nombre');
        // $plato -> precio = $request -> input('precio');
        // $plato -> tipo_id = $request -> input('tipo_id');
        // $plato -> save();

        // return redirect('platos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $bebida = Plato::find($id);

        // $bebida -> delete;
    }
}
