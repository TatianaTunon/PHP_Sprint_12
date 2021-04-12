<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equips;
use App\Http\Requests\equipsRequest;

class EquipsFutbolController extends Controller
{
    public function index(Request $request) {
        $equips = Equips::all(); 
        return view('equips/index', compact('equips'));
    }

    public function create() { 
        return view('equips/create');
     }

     public function store(equipsRequest $request) { 
        $equips = Equips::create($request->all());
        return redirect()->route('equips.index');
     }

    public function show (equips $equips, $id) {
        $equips = Equips::findOrFail ($id);
        return view ('equips/show', compact('equips'));
    }

    public function edit(equips $equips) { 
        return view('equips/edit', compact('equips'));
    }

     public function update(Request $request, equips $equips) { 
        $request->validate([ 
            'Nombre_Equipo' => 'required | max:255',
            'categoria' => 'required | max:255',
            'entrenador' => 'required | max:255',
            'phone_number' => 'required | max:255',
        ]);
        $equips->update($request->all());
        return redirect()->route('equips.index');
    }

    public function destroy(equips $equips) {
        $equips->delete();
        return redirect()->route('equips.index');
    }
}