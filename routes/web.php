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
Route::post('/produits/store', [ProduitsController::class,"store"]);


// Route::get('/products', [, "index"]);
// Route::view('/clients', 'Clients.index');

