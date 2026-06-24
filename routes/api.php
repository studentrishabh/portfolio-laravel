<?php

use App\Http\Controllers\Api\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by RouteServiceProvider with the "api" middleware
| group, prefixed with /api automatically.
|
| The Vue frontend communicates with this API via Axios.
|
*/

// Health check endpoint (useful for deployment verification)
Route::get('/health', function () {
    return response()->json([
        'status'  => 'ok',
        'service' => 'Rishabh Portfolio API',
        'version' => '1.0.0',
        'time'    => now()->toDateTimeString(),
    ]);
});

// Contact Form Submission
// POST /api/contact
// Validates, stores message in MySQL, returns JSON response
Route::post('/contact', [ContactController::class, 'store'])
     ->name('api.contact.store');
