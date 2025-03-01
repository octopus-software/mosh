<?php

use App\Http\Controllers\DashboardGetController;
use App\Http\Controllers\Flavour\FlavourGetEditController;
use App\Http\Controllers\Flavour\FlavourGetListController;
use App\Http\Controllers\Flavour\FlavourStoreController;
use App\Http\Controllers\Flavour\FlavourUpdateController;
use App\Http\Controllers\Inventory\RefillHistoryStoreController;
use App\Http\Controllers\Inventory\StockingHistoryStoreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Shop\ShopGetEditController;
use App\Http\Controllers\Shop\ShopGetListController;
use App\Http\Controllers\Shop\ShopStoreController;
use App\Http\Controllers\Shop\ShopUpdateController;
use App\Http\Controllers\User\UserGetController;
use App\Http\Controllers\User\UserStoreController;
use App\Http\Controllers\User\UserUpdateController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/token',function(){
    return csrf_token();
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', DashboardGetController::class)->name('dashboard');
});

//USER
Route::post('/user',UserStoreController::class)->name('user.store');
Route::put('/user/{id}',UserUpdateController::class)->name('user.update');
Route::get('/user/{id}',UserGetController::class)->name('user.get');
Route::get('/user/{id}/edit',UserGetController::class)->name('user.edit');

//SHOP
Route::post('shop',ShopStoreController::class)->name('shop.store');
Route::get('shop/{id}/edit',ShopGetEditController::class)->name('shop.edit');
Route::put('/shop/{id}',ShopUpdateController::class)->name('shop.update');
Route::get('/shops',ShopGetListController::class)->name('shop.list');

//FLAVOUR
Route::post('flavour',FlavourStoreController::class)->name('flavour.store');
Route::put('flavour/{id}',FlavourUpdateController::class)->name('flavour.update');
Route::get('flavour/{id}/edit',FlavourGetEditController::class)->name('flavour.edit');
Route::get('flavours',FlavourGetListController::class)->name('flavour.list');

//INVENTORY
Route::post('/inventory/refill',RefillHistoryStoreController::class)->name('inventory.refill.store');
Route::post('/inventory/stocking',StockingHistoryStoreController::class)->name('inventory.stocking.store');

require __DIR__ . '/auth.php';
