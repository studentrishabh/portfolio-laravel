<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| All requests to "/" are served by PortfolioController@index which
| returns the Blade SPA shell (app.blade.php). Vue handles all
| in-page section navigation via anchor links — no additional routes needed.
|
*/

// Main portfolio page — serves the Vue SPA shell
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

// Catch-all: redirect any unknown path back to the SPA
// (handles direct URL navigation and browser refresh)
// Route::fallback(function () {
//     return redirect('/');
// });
