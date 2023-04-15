<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\CollectiveController;
use App\Http\Controllers\DocumentController;
use App\Models\Artwork;
use App\Models\Collective;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/collection', function () {
  return Inertia::render('Frontend/Collection');
});

Route::get('/about', function (){
  return Inertia::render('Frontend/About');
});

Route::get('/archive', function (){
  return Inertia::render('Frontend/Archive');
});

Route::middleware(['auth:sanctum','verified',])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
  })->name('dashboard');

  Route::resource('/artists', ArtistController::class);
  Route::resource('/events', EventController::class);
  Route::resource('/artworks', ArtworkController::class);
  Route::resource('/collectives', CollectiveController::class);
  Route::resource('/documents', DocumentController::class);
});
