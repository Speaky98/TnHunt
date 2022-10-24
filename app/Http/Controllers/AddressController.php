<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresss = Address::all();
        return view ('layouts.address.address')->with('addresss', $addresss);
    }
    
    public function create()
    {
        return view('layouts.address.create');
    }
    public function createAddress(Request $req)
    {
        $req->validate([
            'name'=>'required|min:5'

   ],[
    
    'name.min'=>'Address is must have at least 5 char',
   
    'name.required'=>'Address is required',
  
   ]);
       $addresss=new Address;
       $addresss->name=$req->name;
       $addresss->save();
       return redirect('address');


    }
    public function store(Request $request)
    {
        $input = $request->all();
        Address::create($input);
        return redirect('address')->with('flash_message', 'Address Addedd!');  
    }
    
    public function show($id)
    {
        $Address = Address::find($id);
        return view('layouts.address.show')->with('addresss', $Address);
    }
    
    public function edit($id)
    {
        $addresss = Address::find($id);
        return view('layouts.address.edit')->with('addresss', $addresss);
    }
  
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:5'

   ],[
    
    'name.min'=>'Address is must have at least 5 char',
   
    'name.required'=>'Address is required',
  
   ]);
        $address = Address::find($id);
        $input = $request->all();
        $address->update($input);
        return redirect('address')->with('flash_message', 'Address Updated!');  
    }
  
    public function destroy($id)
    {
        Address::destroy($id);
        return redirect('address')->with('flash_message', 'Address deleted!');  
    }
}
