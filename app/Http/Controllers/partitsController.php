<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partits;
use App\Http\Requests\partitsRequest;

class partitsController extends Controller
{
    public function index(Request $request) {
        $partits = partits::all(); 
        return view('partits/index', compact('partits'));
    }

    public function create() { 
        return view('partits/create');
     }

     public function store(partitsRequest $request) { 
        $partits = partits::create($request->all());
        return redirect()->route('partits.index');
     }

    public function edit(partits $partits) { 
        return view('partits/edit', compact('partits'));
    }

    public function update(partitsRequest $request, partits $partits) {  
        $partits->update($request->all());
        return redirect()->route('partits.index');
    }

    public function destroy(partits $partits) {
        $partits->delete();
        return redirect()->route('partits.index');
    }
}
