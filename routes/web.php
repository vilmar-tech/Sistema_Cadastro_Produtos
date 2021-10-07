<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
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


Route::get('/users/{name}', function($name) {
    return "Olá mundo".$name;
});


Route::get('/user', [UserControler::class,'get']); //rota de controller

Route::get('/produtos', function() {
    return view('products');
});

Route::fallback(function() {
    return "Nenhuma rota existe";
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
