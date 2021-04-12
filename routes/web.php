<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VagasController;
use App\Http\Controllers\LinguagensController;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\Form\TestController;
use App\Http\Controllers\AuthController;
use PHPUnit\Framework\Test;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('candidatos', CandidatosController::class)->names('candidato')->parameters(['candidatos' => 'candidato']);

Route::resource('linguagens', LinguagensController::class)->names('linguagem')->parameters(['linguagens' => 'linguagem']);

Route::resource('vagas', VagasController::class)->names('vaga')->parameters(['vagas' => 'vaga']);

Route::resource('usuarios', TestController::class)->names('user')->parameters(['usuarios' => 'user']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', AuthController::class, 'dashboard')->name('admin');
Route::get('/admin/login', AuthController::class, 'showLoginForm')->name('admin.login');