<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class AnimalControllerFront extends Controller
{

    public function index()
    {
        $animals = Animal::all();
        return view('layouts.Client.animals.index',['animals'=>$animals]);
    }


    public function create()
    {
        return view ('layouts.Dashboard.animals.create');
    }


    public function store(Request $request)
    {
        if ($request->hasFile('image')){
            $destination_path = 'public/images/animals/';
            $image=$request->file('image');
            $image_name= $image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $animal['image']=$image_name;
        }

        Animal::create([
            "name" => $request->name,
            "image" => $image_name,
            "species" => $request->species,
            "description"=> $request->description,
            "rarety"=> $request->rarety,
            "hunt_period"=> $request->hunt_period,
        ]);
        return redirect(route("animals.index"));
    }


    public function show($id)
    {
        $animal=Animal::find($id);

        return view('layouts.Client.animals.show',compact('animal'));

    }


    public function edit($id)
    {
        $animal=Animal::find($id);
        return view('layouts.Dashboard.animals.edit',compact('animal'));
    }


    public function update(Request $request, $id)
    {   $animal=Animal::find($id);


            //supprime l'ancienne image

            if ($request->hasFile('image')){
                Storage::delete($animal->image);
                $destination_path = 'public/images/animals/';
                $image=$request->file('image');
                $image_name= $image->getClientOriginalName();
                $path=$request->file('image')->storeAs($destination_path,$image_name);
                $animal['image']=$image_name;
            }
            $animal=['name'=>$request->name,
            'description'=>$request->description,
            'species'=>$request->species,
            'rarety'=>$request->rarety,
            'hunt_period'=>$request->hunt_period];
        Animal::whereId($id)->update($animal);
        return redirect(route("animals.index"));
    }


    public function destroy($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        return redirect()->route('animals.index');
    }
}
