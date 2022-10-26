<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['animals']]);
    }

    public function index()
    {
        $route = Route::current()->getName();
        $animals = Animal::all();
        return view('layouts.Dashboard.animals.index',['animals'=>$animals,"route"=>$route]);
    }


    public function create()
    {
        $route = Route::current()->getName();
        return view ('layouts.Dashboard.animals.create',["route"=>$route]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:50',
            'species' => 'required|max:50',
            'hunt_period' => 'required|max:50',
            'rarety' => 'required|max:50',
            'image' => 'mimes:jpg,png',
            'description' => 'required|max:255',
        ]);

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
        return redirect()->route("animals.index")->with('succes',"Created successfully!");
    }


    public function show($id)
    {
        $animal=Animal::find($id);

        //return view('Produit.show',compact('animals'));

    }


    public function edit($id)
    {
        $animal=Animal::find($id);
        $route = Route::current()->getName();
        return view('layouts.Dashboard.animals.edit',compact('animal','route'));
    }


    public function update(Request $request, $id)
    {   $animal=Animal::find($id);

        $request->validate([
            'name' => 'required|max:50',
            'species' => 'required|max:50',
            'hunt_period' => 'required|max:50',
            'rarety' => 'required|max:50',
            'image' => 'mimes:jpg,png',
            'description' => 'required|max:255',
        ]);
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
