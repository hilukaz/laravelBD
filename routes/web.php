<?php

use Illuminate\Support\Facades\Route;
use App\Models\Servico;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dados', function () {
    $primeiroRegistro= new Servico;
    $primeiroRegistro -> nome='pintura';
    $primeiroRegistro -> preco='R$ 100,00';
    $primeiroRegistro -> save();

    return view('welcome');
});
