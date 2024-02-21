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
Route::get('/create', function() {
    $category = Category::create([
        'name' => 'event',
        'description' => 'first event'
    ]);

    $type = Type::create([
        'name' => 'buisness',
    ]);

    $pricing  = Pricing::create([
        'base_formula' => 10000,
        'extra_formula' => 20000
    ]);

    $service = Service::create([
        'slug' => 'first-service',
        'name' => 'first service',
        'description' => 'ici la description',
        'category_id' => 7,
        'type_id' => 7,
        'pricing_id' => 4
    ]);

    return 'service cree';
});

Route::get('/', [ServiceController::class, 'index'])->name('index');

Route::get('/store', [ServiceController::class, 'store'])->name('store');

Route::get('/show', [ServiceController::class, 'show'])->name('show');

Route::get('/update', [ServiceController::class, 'update'])->name('update');

//Route::get('/destroy', [ServiceController::class, 'destroy'])->name('destroy');






