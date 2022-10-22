<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;


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

