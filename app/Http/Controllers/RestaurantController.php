<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request){
        // return view('restaurants.index', ['restaurants' => Restaurant::orderBy('title')->get()]);
        //    return view('restaurants.index', ['restaurants' => Restaurant::orderBy('title')->get()]);
        if(isset($request->meniu_id) && $request->meniu_id !== 0)
        $restaurants = \App\Models\Restaurant::where('meniu_id', $request->meniu_id)->orderBy('title')->get();
    else
        $restaurants = \App\Models\Restaurant::orderBy('title')->get();
    $menius = \App\Models\Meniu::orderBy('title')->get();
    return view('restaurants.index', ['restaurants' => $restaurants, 'menius' => $menius]);
    }
    
    public function create(){
        $menius = \App\Models\Meniu::orderBy('title')->get();
        return view('restaurants.create', ['menius' => $menius]);
    }
    public function store(Request $request){
        $restaurant = new Restaurant();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        $restaurant->fill($request->all());
        $restaurant->save();
        return redirect()->route('restaurant.index');
        
    }
    public function show(Restaurant $restaurant){
        //
    }
    // ATTENTION :: we need menius to be able to assign them
    public function edit(Restaurant $restaurant){
        $menius = \App\Models\Meniu::orderBy('title')->get();
        return view('restaurants.edit', ['restaurant' => $restaurant, 'menius' => $menius]);
    }
    public function update(Request $request, Restaurant $restaurant){
        $restaurant->fill($request->all());
        $restaurant->save();
        return redirect()->route('restaurant.index');
    }
    public function destroy(Restaurant $restaurant){
        // if (count($restaurant->menius)){ 
        //     return back()->withErrors(['error' => ['Can\'t delete Meniu with Restorant assigned, please unassign restorant first!']]);
        // }
        $restaurant->delete();
        return redirect()->route('restaurant.index');
    }

}
