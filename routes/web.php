<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\ProductManager;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AttributeManager;
use App\Http\Livewire\InventoryManager;
use App\Http\Livewire\RackShelfManager;
use App\Http\Livewire\StockIntakeManager;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth'], 'as' => 'admin.', 'prefix' => 'admin'], function () {

    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


    // Roles
    Route::resource('role', App\Http\Controllers\Admin\RoleController::class);

    

    //Users
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::put('user/status/{id}', [App\Http\Controllers\Admin\UserController::class, 'status'])->name('user.status');
    Route::get('user/remove-image/{id}', [App\Http\Controllers\Admin\UserController::class, 'removeImage'])->name('user.removeImage');

    //User_Profile
    Route::get('profile-edit', [App\Http\Controllers\Admin\UserController::class, 'editProfile'])->name('user.edit-profile');
    Route::get('get-state', [App\Http\Controllers\Admin\UserController::class, 'getStates'])->name('user.get-states');
    Route::post('update-profile', [App\Http\Controllers\Admin\UserController::class, 'updateProfile'])->name('user.update-profile');

     //Category
     Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
     Route::post('category/update-orders', [App\Http\Controllers\Admin\CategoryController::class, 'updateOrders'])->name('category.update.orders');

     Route::get('/attributes', AttributeManager::class)->name('attributes.index');

     Route::get('/rack-shelf-manager', RackShelfManager::class)->name('rack.shelf.manager');

     Route::get('/products', ProductManager::class)->name('products.index');

     Route::get('/inventory', InventoryManager::class)->name('inventory.index');

     Route::get('/stock-intakes', StockIntakeManager::class)->name('stock.intakes.index');

     Route::view('/rack-overview', 'pages.rack-overview');

});
