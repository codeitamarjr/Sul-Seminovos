<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [Dashboard::class, 'index'])->name('index');
    });

Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', function () {
            return view('backend.admin.index');
        })->name('index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
