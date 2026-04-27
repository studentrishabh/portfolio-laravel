<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/service-details', [HomeController::class, 'serviceDetails']);
Route::post('/contact', [HomeController::class, 'contact']);
Route::post('/portfolio-details', [HomeController::class, 'portfolioDetails']);
Route::post('/layout', [HomeController::class, 'layout']);
Route::post('/starter-page', [HomeController::class, 'starterPage']);
Route::post('/send-email', [ContactController::class, 'send']);
Route::get('/contact', function () {
    return view('contact');
});
