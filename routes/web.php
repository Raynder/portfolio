<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


// Central: rotas normais
Route::domain('portifolio.local')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/admin', [PortfolioController::class, 'admin'])->name('portfolio.admin');

    require __DIR__.'/auth.php';
});

Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');

// Rotas para manipulação de projetos
Route::delete('/projetos/{id}', [PortfolioController::class, 'destroyProject'])->name('projetos.destroy');
Route::get('/projetos/{id}', [PortfolioController::class, 'getProject'])->name('projetos.get');
Route::put('/projetos/{id}', [PortfolioController::class, 'updateProject'])->name('projetos.update');

require __DIR__.'/customer.php';
