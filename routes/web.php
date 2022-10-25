<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProgChasseController;
use App\Http\Controllers\ParticiperprogController;



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

