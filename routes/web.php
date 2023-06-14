<?php

use App\Models\Category;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FIPEController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\AdvertisementsController;
use App\Http\Controllers\FrontendController;

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

/* MENU Available in all views */

View::composer(['*'], function ($view) {
    $menus = Category::with('subcategories', 'subcategories')->get();
    $view->with('menus', $menus);
});

/* Define INDEX route */
Route::get('/', function () {
    return view('index');
});

/* Define HOME route */
Route::get('/home', function () {
    return view('index');
});

/* Define Category route */
Route::get('/categoria/{category:slug}', [FrontendController::class, 'index'])->name('category.show');
Route::get('/categoria/{category:slug}/{subcategory:slug}', [FrontendController::class, 'subcategory'])->name('subcategory.index');

// /* Define User Dashboard route */
// Route::middleware(['auth:sanctum', 'verified'])
//     ->prefix('dashboard')->name('dashboard.')->group(function () {
//         Route::get('/', [Dashboard::class, 'index'])->name('index');
//     });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('profiles', ProfilesController::class);
    Route::resource('ads', AdvertisementsController::class);
});

/* Define ADMIN routes */
Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('backend.admin.index');
    });
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubcategoryController::class);
    Route::resource('childcategory', ChildCategoryController::class);
});

/* FIPE API */
Route::get('/api/car-models/{brand}', [FIPEController::class, 'getCarModels']);
Route::get('/api/car-years/{brand}/{model}', [FIPEController::class, 'getCarYears']);
Route::get('/api/car-details/{brand}/{model}/{year}', [FIPEController::class, 'getCarDetails']);
