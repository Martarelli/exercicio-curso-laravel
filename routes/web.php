<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentsController;

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
Route::get('/', [HomeController::class, 'clientes']);

//EXERCICIO POKEMON
Route::get('/pokemon/{nome}', [HomeController::class, 'pokemon']);

//EXERCICIO CALCULADORA
Route::get('/calculadora', [HomeController::class, 'calculadora']);
Route::post('/calcular', [HomeController::class, 'calcular']);

//EXERCICIO PLACES
Route::get('/places', [PlaceController::class, 'places']);

Route::get('/places/create', [PlaceController::class, 'create']);
Route::post('/places/store', [PlaceController::class, 'store']);

Route::get('/places/show/{id}', [PlaceController::class, 'show']);
Route::get('/places/edit/{id}', [PlaceController::class, 'edit']);
Route::post('/places/update/{id}', [PlaceController::class, 'update']);
Route::get('/places/delete/{id}', [PlaceController::class, 'delete']);

//EXERCICIO CONTACT
Route::group(['middleware' => 'auth'], function () {
    Route::get('/contacts', [ContactController::class, 'contacts']);
    Route::get('/contacts/create', [ContactController::class, 'create']);
    Route::post('/contacts/store', [ContactController::class, 'store']);
    Route::get('/contacts/show/{id}', [ContactController::class, 'show']);
    Route::get('/contacts/edit/{id}', [ContactController::class, 'edit']);
    Route::post('/contacts/update/{id}', [ContactController::class, 'update']);
    Route::get('/contacts/delete/{id}', [ContactController::class, 'destroy']);
});

//EXERCICIOS DOCUMENTOS
Route::post('/photo', [DocumentsController::class, 'storePhoto']);
Route::post('/images', [DocumentsController::class, 'storeImage']);
Route::post('/document', [DocumentsController::class, 'storeDocument']);

//EXERCICIO ELOQUENT
Route::post('/clients/store', [ClientController::class, 'storeClient']);
Route::get('/clients/show/{client}', [ClientController::class, 'getClient']);
Route::get('/clients/name/{name}', [ClientController::class, 'getName']);

//Rotas de autenticação
Route::get('/login', [UserController::class, 'login']) -> name('login');
Route::post('/signin', [UserController::class, 'signin']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/logout', [UserController::class, 'logout']);
