<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Chien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ChienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['chiens', 'index']]);
    }

    public function index()
    {
        $route = Route::current()->getName();
        $chiens = Chien::all();
        return view('layouts.Dashboard.chiens.index',['chiens'=>$chiens,"route"=>$route]);
    }

    public function create()
    {
        $route = Route::current()->getName();
        $chiens = Animal::all();
        return view('layouts.Dashboard.chiens.create',['animals'=>$chiens,"route"=>$route]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'breed' => 'required|max:20',
            'animal_id' => 'required|max:50',
            'image' => 'mimes:jpg,png',
            'description' => 'required|max:255',
        ]);
        if ($request->hasFile('image')){
            $destination_path = 'public/images/chiens/';
            $image=$request->file('image');
            $image_name= $image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $animal['image']=$image_name;
        }

        Chien::create([
            "name" => $request->name,
            "image" => $image_name,
            "breed" => $request->breed,
            "description"=> $request->description,
            "animal_id"=> $request->animal_id,

        ]);
        return redirect(route("chiens.index"));
    }


    public function show($id)
    {
        $chien=Chien::find($id);
    }


    public function edit($id)
    {
        $route = Route::current()->getName();
        $chien=Chien::find($id);
        $animals=Animal::all();
        return view('layouts.Dashboard.chiens.edit',compact('chien','animals','route'));
    }

    public function update(Request $request, $id)
    {


        $chien=Chien::find($id);


        //supprime l'ancienne image

        if ($request->hasFile('image')){
           // Storage::delete($chien->image);
            $destination_path = 'public/images/chiens/';
            $image=$request->file('image');
            $image_name= $image->getClientOriginalName();
            $path=$request->file('image')->storeAs($destination_path,$image_name);
            $chien['image']=$image_name;
        }
        $chien=['name'=>$request->name,
            'description'=>$request->description,
            'species'=>$request->breed,
            'rarety'=>$request->animal_id];
        Animal::whereId($id)->update($chien);
        return redirect(route("chiens.index"));
    }


    public function destroy($id)
    {
        $chien = Chien::find($id);
        $chien->delete();
        return redirect()->route('chiens.index');
    }
}
