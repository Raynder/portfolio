<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use GuzzleHttp\Middleware;

// Central: rotas normais
// Route::domain('portifolio.local')->group(function () {
Route::domain('hzj4bn5k.srv-108-181-92-69.webserverhost.top')->group(function () {
    Route::prefix('portfolio')->group(function(){
        Route::get('/', function () {
            return view('welcome');
        })->name('home');
    
        Route::middleware(['auth'])->group(function() {
            Route::get('/admin', [AdminController::class, 'index'])->name('portfolio.index');
        
            Route::post('/projetos', [AdminController::class, 'storeProject'])->name('projetos.store');
            Route::delete('/projetos/{id}', [AdminController::class, 'destroyProject'])->name('projetos.destroy');
            Route::get('/projetos/{id}', [AdminController::class, 'getProject'])->name('projetos.get');
            Route::put('/projetos/{id}', [AdminController::class, 'updateProject'])->name('projetos.update');
            
            // Rotas para manipulação de social links
            Route::post('/social', [AdminController::class, 'storeSocial'])->name('social.store');
            Route::delete('/social/{id}', [AdminController::class, 'destroySocial'])->name('social.destroy');
            Route::get('/social/{id}', [AdminController::class, 'getSocial'])->name('social.get');
            Route::put('/social/{id}', [AdminController::class, 'updateSocial'])->name('social.update');
            
            // Rota para atualizar perfil
            Route::put('/perfil', [AdminController::class, 'updateProfile'])->name('perfil.update');
        });
    
        require __DIR__.'/auth.php';
    });
});

Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');

// Rotas para manipulação de projetos

require __DIR__.'/customer.php';
