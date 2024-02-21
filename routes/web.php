<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TypeController;
use App\Models\Category;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Type;
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

Route::get('/', [ServiceController::class, 'index'])->name('index');

Route::post('/store', [ServiceController::class, 'store'])->name('store');

Route::get('/show', [ServiceController::class, 'show'])->name('show');

Route::get('/update', [ServiceController::class, 'update'])->name('update');

Route::get('/create', [ServiceController::class, 'create'])->name('create');

Route::get('/destroy', [ServiceController::class, 'destroy'])->name('destroy');






