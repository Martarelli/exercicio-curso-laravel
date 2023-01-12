<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;

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
Route::get('/', function(){
    return 'WORKING';
});
Route::get('/pokemon/{nome}', [HomeController::class, 'pokemon']);

Route::get('/calculadora', [HomeController::class, 'calculadora']);
Route::post('/calcular', [HomeController::class, 'calcular']);

Route::get('/places', [PlaceController::class, 'places']);

Route::get('/places/create', [PlaceController::class, 'create']);
Route::post('/places/store', [PlaceController::class, 'store']);

Route::get('/places/show/{id}', [PlaceController::class, 'show']);
