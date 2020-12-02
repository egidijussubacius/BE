<?php

namespace App\Http\Controllers;

use App\Models\Meniu;
use Illuminate\Http\Request;

class MeniuController extends Controller
{
    public function index() {
        return view('menius.index', ['menius' => Meniu::orderBy('price')->get()]);
    }
    public function create() {
        return view('menius.create');
    }
    public function store(Request $request) {
        $meniu = new Meniu();
     // can be used for seeing the insides of the incoming request
         // dd($request->all()); die();
        $meniu->fill($request->all());
        $meniu->save();
        return redirect()->route('meniu.index');
 
}
public function edit(Meniu $meniu){
    return view('menius.edit', ['meniu' => $meniu]);
}

public function update(Request $request, Meniu $meniu){
    $meniu->fill($request->all());
    $meniu->save();
    return redirect()->route('meniu.index');
}

 public function destroy(Meniu $meniu){
    if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    }
    if (count($meniu->restaurants)){ 
        return back()->withErrors(['error' => ['Can\'t delete Meniu with Restorant assigned, please unassign restorant first!']]);
    }

     $meniu->delete();
     return redirect()->route('meniu.index');
 }
}
