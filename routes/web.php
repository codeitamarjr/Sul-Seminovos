<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FIPEController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\AdvertisementsController;

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

Route::get('/', [MenuController::class, 'menu'])->name('menu');

Route::get('/home', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [Dashboard::class, 'index'])->name('index');
    });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('ads', AdvertisementsController::class);
});

Route::middleware(['auth:sanctum', 'verified'])
    ->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', function () {
            return view('backend.admin.index');
        })->name('index');
        Route::resource('category', CategoryController::class);
        Route::resource('subcategory', SubcategoryController::class);
        Route::resource('childcategory', ChildCategoryController::class);
    });

/* Available in all views */
View::composer(['*'], function ($view) {
    $menus = \App\Models\Category::with('subcategories')->get();
    $view->with('menus', $menus);
});

/* FIPE API */
Route::get('/api/car-models/{brand}', [FIPEController::class, 'getCarModels']);
Route::get('/api/car-years/{brand}/{model}', [FIPEController::class, 'getCarYears']);
Route::get('/api/car-details/{brand}/{model}/{year}', [FIPEController::class, 'getCarDetails']);
