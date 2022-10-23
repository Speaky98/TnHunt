<?php

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

Route::get("/Product",[ProductController::class,'index'])->name("productpage");

Route::post("/Ajoutafterproduct",[ProductController::class,'Add'])->name("Ajoutprod2");

Route::post("/Modifbeforeproduct",function (Request $request){
    $list=Rayon::all();
    $route = Route::current()->getName();
    return view("layouts.Dashboard.tables.crud.modifyproduct")->with('req',$request)->with('route',$route)->with('list',$list);
})->name("Modifyprod1");

Route::post("/Modifafterproduct",[ProductController::class,'Modify'])->name("Modifyprod2");

Route::get("/Deleteproduct/{id}",[ProductController::class,'Delete'])->name("Deleteprod1");

/********Dashboard*********/

Route::get("/Rayon",[RayonController::class,'index'])->name("rayonpage");

Route::post("/Ajoutafterrayon",[RayonController::class,'Add'])->name("Ajoutray2");

Route::post("/Modifbeforerayon",function (Request $request){
    $route = Route::current()->getName();
    return view("layouts.Dashboard.tables.crud.modifyrayon")->with('req',$request)->with('route',$route);
})->name("Modifyray1");

Route::post("/Modifafterrayon",[RayonController::class,'Modify'])->name("Modifyray2");

Route::get("/Deleterayon/{id}",[RayonController::class,'Delete'])->name("Deleteray1");

/********Client*********/

Route::get("/Productclient",[ProductController::class,'indexclient'])->name("productpageclient");

Route::post("/Ajoutafterrate",[ProductController::class,'Addrate'])->name("Modifyrate2");


