<?php

namespace App\Http\Controllers;

use App\Models\Statut;
use Illuminate\Http\Request;

class StatutController extends Controller
{
    public function index()
    {
        $statuts = Statut::all();

        return view('statuts.index', [
            'statuts' => $statuts,
        ]);
    }

    public function create()
    {
        return view('statuts.create');
    }

    public function store(Request $request) {
        //    dd($request->all());

        Statut::create([
            'label'=> $request->label,
        ]);

        return redirect()->route('statuts.index');
    }

    public function edit(Statut $statut)
    {
        return view('statuts.edit', [
            'statut' => $statut,
        ]);
    }

    public function update(Request $request, Statut $statut)
    {
        $statut->update([
            'label' => $request->label,
        ]);

        return redirect()->route('statuts.index');
    }

    public function destroy(Statut $statut)
    {
        // dd(count($statut->tickets));
        $message = 'Impossible de supprimer le statut';
        if (count($statut->tickets) === 0)
        {
            $statut->delete();
            $message = '';
        }

        // $delete = Statut::with('tickets')->find($statut->id);

        // dd($delete);


         return redirect()->route('statuts.index')->with('statutDelete',$message);
    }
}