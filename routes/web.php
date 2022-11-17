<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationRackController;
use App\Http\Controllers\SearchBookController;
use App\Http\Controllers\Student\LoginController;
use App\Http\Controllers\Student\RegisterController;
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

Route::middleware('guest')->group(function(){
    Route::get('/', [LoginController::class, 'loginForm']);
    Route::post('/',[LoginController::class, 'store'])->name('student.login');

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.post');
});


Route::group(['prefix' => 'student', 'middleware' => 'auth:student'], function(){
    Route::get('/dashboard', function(){
        return Inertia::render('Student/Dashboard');
    })->name('student.dashboard');
    Route::get('/search/book',[SearchBookController::class, 'index'])->name('search.book');
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
