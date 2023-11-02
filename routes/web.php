<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Logins\AdminController;
use App\Http\Controllers\Logins\CommController;
use App\Http\Controllers\Logins\OpsController;
use App\Http\Controllers\Pages\{PartyController};
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

/* Área logada */
Route::middleware(['auth'])->group(function ()     /* Roda o middleware de autenticação para todas as áreas logadas */
{
    /* Admin */
    Route::middleware(['admin'])->group(function ()
    {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/admin/parties', [PartyController::class, 'index'])->name('admin.parties');
    });

    /* Comercial */
    Route::middleware(['comm'])->group(function ()
    {
        Route::get('/commercial', [CommController::class, 'index'])->name('comm.index');
        Route::get('/commercial/parties', [PartyController::class, 'index'])->name('comm.parties');
    });

    /* Operacional */
    Route::middleware(['ops'])->group(function ()
    {
        Route::get('/ops', [OpsController::class, 'index'])->name('ops.index');
    });

    /* Aniversariante */
    Route::get('/parties/create', [PartyController::class, 'create'])->name('parties.create');
    Route::post('/parties/create', [PartyController::class, 'store'])->name('parties.store');
    
});

require __DIR__.'/auth.php';
