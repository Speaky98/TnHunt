<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AnimalControllerFront;
use App\Http\Controllers\ChienController;
use App\Http\Controllers\ChienControllerFront;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RayonController;
use App\Models\Rayon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/",function (){
    return view("welcome");
});

Route::get("/Front",function (){
    return view("layouts.Client.main");
})->name("frontpage");

Route::get('/Dashboard', function () {
    $route = Route::current()->getName();
    return view('layouts.Dashboard.main')->with('route',$route);
})->name("backpage");;

//Route::get("/Product",function (){
//    $route = Route::current()->getName();
//    return view("layouts.Dashboard.tables.product")->with('route',$route);
//})->name("productpage");

Route::get("/test",[ProductController::class,'indextest'])->name("testtest");

/********Dashboard product*********/

Route::get("/Product",[ProductController::class,'index'])->name("productpage");

Route::post("/Ajoutafterproduct",[ProductController::class,'Add'])->name("Ajoutprod2");

Route::get("/Modifbeforeproduct/{id}",[ProductController::class,'Modifybefore'])->name("Modifyprod1");

Route::post("/Modifafterproduct",[ProductController::class,'Modify'])->name("Modifyprod2");

Route::get("/Deleteproduct/{id}",[ProductController::class,'Delete'])->name("Deleteprod1");

/********Dashboard rayon*********/

Route::get("/Rayon",[RayonController::class,'index'])->name("rayonpage");

Route::post("/Ajoutafterrayon",[RayonController::class,'Add'])->name("Ajoutray2");

Route::get("/Modifbeforerayon{id}",[RayonController::class,'Modifybefore'])->name("Modifyray1");

Route::post("/Modifafterrayon",[RayonController::class,'Modify'])->name("Modifyray2");

Route::get("/Deleterayon/{id}",[RayonController::class,'Delete'])->name("Deleteray1");

/********Client*********/

Route::get("/Productclient",[ProductController::class,'indexclient'])->name("productpageclient");

Route::post("/Ajoutafterrate",[ProductController::class,'Addrate'])->name("Modifyrate2");

/***********Tarak*******/

Route::resource('animals', AnimalController::class);

Route::resource('animalsFront', AnimalControllerFront::class);

Route::resource('chiens', ChienController::class);

Route::resource('chiensFront', ChienControllerFront::class);


