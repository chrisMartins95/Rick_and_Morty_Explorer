<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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


// Rota da Página Inicial (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rota para exibir detalhes do personagem
Route::get('/characters/{id}', [CharacterController::class, 'show'])->name('characters.show');

// Rota para exibir lista de personagens salvos
Route::get('/saved-characters', [CharacterController::class, 'savedCharacters'])->name('saved.characters');

// Rota da página Sobre (Sobre)
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Rotas de Autenticação
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);



