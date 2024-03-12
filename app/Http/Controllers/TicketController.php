<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::orderBy('created_at', 'DESC')->get();

        return view('tickets.index', [
            'tickets' => $tickets,
        ]);
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request) {
        //    dd($request->all());   
        $user = User::factory()->create();

        Ticket::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'user_id'=> $user->id
        ]);

        return redirect()->route('tickets.index');
    }

    public function edit(Request $request, Ticket $ticket)
    {
        

        return view('tickets.edit', [
            'ticket' => $ticket,
        ]);
    }

    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update([
            'title' => $request->title,
            'description'=> $request->description,
        ]);

        return redirect()->route('tickets.index');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index');
    }
}
