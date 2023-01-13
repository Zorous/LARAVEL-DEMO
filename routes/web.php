<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientsController;

use App\Http\Controllers\ProduitsController;

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

Route::view('/', 'welcome');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::get('/clients', [ClientsController::class, "index"]);

Route::resource('/produits', ProduitsController::class);

//add
Route::post('/produits/store', [ProduitsController::class,"store"]);



//update
//1
Route::get("/produits/edit/{id}",[ProduitsController::class,"edit"]);

//2
Route::put("/produits/update/{id}",[ProduitsController::class,"update"]);



//delete
Route::get("/produits/delete/{id}",[ProduitsController::class,"destroy"]);



