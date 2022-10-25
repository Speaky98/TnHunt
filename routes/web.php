<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProgChasseController;
use App\Http\Controllers\ParticiperprogController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AnimalControllerFront;
use App\Http\Controllers\ChienController;
use App\Http\Controllers\ChienControllerFront;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RayonController;
use App\Models\Rayon;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/Table",function (){
    return view("layouts.Dashboard.tables.simple");
})->name("firstpage");
Route::get("/Front",function (){
    return view("layouts.Client.main");
});

Route::resource("/event", EventsController::class);
Route::post('add',[EventsController::class,'createEvent']);

Route::resource("/address", AddressController::class);

Route::post('addAddress',[AddressController::class,'createAddress']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/progchasse', ProgChasseController::class);
Route::resource('/participerprog', ParticiperprogController::class);
Route::get('/add/{id}',[ParticiperprogController::class,'add']);
Route::post('/save/{id}',[ParticiperprogController::class,'createParticipant']);

Route::get("/Front",function (){
    return view("layouts.Client.main");
})->name("frontpage");

Route::get('/Dashboard', function () {
    $route = Route::current()->getName();
    return view('layouts.Dashboard.main')->with('route',$route);
})->name("backpage");;


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
Route::get("/Eventclient",[EventsController::class,'iclient'])->name("eventpageclient");

Route::post("/Ajoutafterrate",[ProductController::class,'Addrate'])->name("Modifyrate2");

/***********Tarak*******/

Route::resource('animals', AnimalController::class);

Route::resource('animalsFront', AnimalControllerFront::class);

Route::resource('chiens', ChienController::class);

Route::resource('chiensFront', ChienControllerFront::class);
