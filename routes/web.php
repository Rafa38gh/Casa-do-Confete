<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Logins\AdminController;
use App\Http\Controllers\Logins\CommController;
use App\Http\Controllers\Logins\OpsController;
use App\Http\Controllers\Pages\{PartyController};
use App\Http\Controllers\Pages\{FoodController};
use App\Http\Controllers\Pages\{RecommendationController};
use App\Http\Controllers\DashboardController;
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
        /* Gerenciamento das festas */
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/admin/parties', [PartyController::class, 'index'])->name('admin.parties');


        /* Gerenciamento do cardápio */
        Route::get('/admin/foods', [FoodController::class, 'index'])->name('admin.foods');
        Route::get('/admin/foods/create', [FoodController::class, 'create'])->name('foods.create');
        Route::post('/admin/foods/create', [FoodController::class, 'store'])->name('foods.store');
        Route::delete('/admin/foods/{id}', [FoodController::class, 'destroy'])->name('foods.destroy');

        /* Gerenciamento das recomendações */
        Route::get('/admin/recommendations', [RecommendationController::class, 'index'])->name('admin.recommendations');
        Route::get('/admin/recommendations/create', [RecommendationController::class, 'create'])->name('recommendations.create');
        Route::post('/admin/recommendations/create', [RecommendationController::class, 'store'])->name('recommendations.store');
        Route::get('/admin/recommendations/{recommendation}/edit', [RecommendationController::class, 'edit'])->name('recommendations.edit');
        Route::put('/admin/recommendations/{recommendation}', [RecommendationController::class, 'update'])->name('recommendations.update');
        Route::delete('/admin/recommendations/{recommendation}', [RecommendationController::class, 'destroy'])->name('recommendations.destroy');

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

    /* Autenticação */
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/dashboard/parties/create', [PartyController::class, 'create'])->name('parties.create');
    Route::post('/dashboard/parties/create', [PartyController::class, 'store'])->name('parties.store');
    Route::delete('/dashboard/parties/{id}', [PartyController::class, 'destroy'])->name('parties.destroy');
    
});

require __DIR__.'/auth.php';
