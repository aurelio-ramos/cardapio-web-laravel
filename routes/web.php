<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    //return view('welcome');
    return view('produto.index');
});

//Rotas para o recurso produtos
Route::get('/produtos', function () {
    return view('produto.index');
});

Route::get('/produtos/create', function () {
    return view('produto.form');
});
//GET/produtos, aponta para o método index(),
//GET /produtos/create, aponta para o método create(),
//POST /produtos, aponta para o método store(),
//GET /produtos/{produto}, aponta para o método show(),
//GET /produtos/{produto}/edit, aponta para o método edit(),
//PUT/PATCH /produtos/{produto}, aponta para o método update(),
//DELETE /produtos/{produto}, aponta para o método destroy().

//Auth::routes();
//rotas que só podem ser acessadas por usuários autenticados ('auth') e verificados('verified')
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

