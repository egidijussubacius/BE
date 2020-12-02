<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller



{



    // public function index(){
    //     // return view('restaurants.index', ['restaurants' => Restaurant::orderBy('title')->get()]);
    // //     if(isset($request->meniu_id) && $request->meniu_id !== 0)
    // //     $restaurants = \App\Models\Restaurant::where('meniu_id', $request->meniu_id)->orderBy('title')->get();
    // // else
    // //     $restaurants = \App\Models\Restaurant::orderBy('title')->get();
    // // $menius = \App\Models\Restaurant::orderBy('title')->get();
    // // return view('restaurants.index', ['restaurant' => $restaurants, 'menius' => $menius]);
    //  return view('restaurants.index', ['restaurants' => Restaurant::orderBy('title')->get()]);
    // }
        // public function index(Request $request){
        //     if(isset($request->country_id) && $request->country_id !== 0)
        //         $customers = \App\Models\Customer::where('country_id', $request->country_id)->orderBy('surname')->get();
        //     else
        //         $customers = \App\Models\Customer::orderBy('surname')->get();
        //     $countries = \App\Models\Country::orderBy('title')->get();
        //     return view('customers.index', ['customers' => $customers, 'countries' => $countries]);
        // }
        // public function create(){
        //     $countries = \App\Models\Country::orderBy('title')->get();
        //     return view('customers.create', ['countries' => $countries]);
        // }
        // public function store(Request $request){
        //     $customer = new Customer();
        //     // can be used for seeing the insides of the incoming request
        //     // dd($request->all());;
        //     $customer->fill($request->all());
        //     $customer->save();
        //     return redirect()->route('customers.index');
        // }
        // public function show(Customer $customer){
        //     //
        // }
        // public function edit(Customer $customer){
        //     $countries = \App\Models\Country::orderBy('title')->get();
        //     return view('customers.edit', ['customer' => $customer, 'countries' => $countries]);
        // }
        // public function update(Request $request, Customer $customer){
        //     $customer->fill($request->all());
        //     $customer->save();
        //     return redirect()->route('customers.index');
        // }
        // public function destroy(Customer $customer, Request $request)
        // {
        //     $customer->delete();
        //     return redirect()->route('customers.index', ['country_id'=> $request->input('country_id')]);
        // }
    
    }
    



//     <select name="country_id" id="" class="form-control">
//     <option value="" selected disabled>Pasirinkite šalį</option>
//     @foreach ($countries as $country)
//    <option value="{{ $country->id }}" @if($country->id == $customer->country_id) selected="selected" @endif>{{ $country->title }}</option>
//    @endforeach
// </select>
