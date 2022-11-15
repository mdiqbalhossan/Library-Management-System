<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationRackController;
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

Route::group(['prefix' => 'admin', 'middleware' => ['auth','verified']], function(){
    Route::get('/dashboard', function(){
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::resource('category',CategoryController::class);
    Route::resource('author',AuthorController::class);
    Route::resource('location',LocationRackController::class);
    Route::resource('book', BookController::class);
});

require __DIR__.'/auth.php';
