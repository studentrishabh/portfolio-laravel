<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * PortfolioController
 *
 * Serves the single-page application shell (app.blade.php).
 * All navigation is handled client-side by Vue Router-style anchor links.
 */
class PortfolioController extends Controller
{
    /**
     * Return the main SPA view.
     * Laravel renders app.blade.php which loads the Vue bundle.
     *
     * GET /
     *
     * @return View
     */
    public function index(): View
    {
        return view('app');
    }
}
