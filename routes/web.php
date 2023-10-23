<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () 
{
    return view('welcome');
})->name('web.index');

Route::get('/sobre', function () 
{
    return view('/site/sobre');
});

Route::get('/cardapio', function () 
{
    return view('/site/cardapio');
});


/* Autenticação */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Área logada (Admin) */
Route::middleware(['auth', 'admin'])->group(function ()     /* Roda os middlewares de autenticação e de admin */
{
    Route::get('/admin', [StatusController::class, 'admin'])->name('status.admin');
});

/* Área logada (Comercial) */
Route::middleware(['auth', 'comm'])->group(function ()     /* Roda os middlewares de autenticação e de comercial */
{
    Route::get('/commercial', [StatusController::class, 'comm'])->name('status.commercial');
});

/* Área logada (Operacional) */
Route::middleware(['auth', 'ops'])->group(function ()     /* Roda os middlewares de autenticação e de ops */
{
    Route::get('/ops', [StatusController::class, 'ops'])->name('status.ops');
});

require __DIR__.'/auth.php';
