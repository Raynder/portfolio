<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


// Central: rotas normais
Route::domain('portifolio.local')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    require __DIR__.'/auth.php';
});

Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');

require __DIR__.'/customer.php';
