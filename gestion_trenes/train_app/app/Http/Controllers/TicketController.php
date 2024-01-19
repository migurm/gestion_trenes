<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Train; //for train names
use App\Models\TicketType; //for ticket types

class TicketController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = "Estos son los tickets existentes";
        
        $tickets = Ticket::all();

        return view('tickets/index',
         ['message' => $message, 'tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $trains = Train::all();
        $ticket_types = TicketType::all();
        return view('tickets/create', ['trains' => $trains], ['ticket_types' => $ticket_types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket -> date = $request -> input('date');
        $ticket -> price = $request -> input('price');
        $ticket -> train_id = $request -> input('train_id');
        $ticket -> ticket_type_id = $request -> input('ticket_type_id');

        $ticket -> save();

        return redirect('tickets');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);

        return view('tickets/show', ['ticket'=>$ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::find($id);
        $ticket_types = TicketType::all();
        $trains = Train::all();

        return view('tickets/edit', [
            'ticket'=>$ticket, 
            'ticket_types'=>$ticket_types, 
            'trains'=>$trains
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);
        
        $ticket -> date = $request -> input('date');
        $ticket -> price = $request -> input('price');
        $ticket -> train_id = $request -> input('train_id');
        $ticket -> ticket_type_id = $request -> input('ticket_type_id');

        $ticket -> save();

        return redirect('tickets');
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
