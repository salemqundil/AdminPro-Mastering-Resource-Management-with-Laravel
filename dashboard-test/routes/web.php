<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
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
    return view('welcome');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/orders', function () {
    return view('admin.orders.index');
})->middleware(['auth', 'verified'])->name('admin.orders.index');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/2', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');

    Route::get('/category', function () {return view('admin.category.index');})->name('admin.category.index');
    Route::get('/users', function () {return view('admin.users.list');})->name('admin.users.all');
    Route::get('/active', function () {return view('admin.users.details');})->name('admin.users.active');
    Route::get('/deposit', function () {return view('admin.deposit.details');})->name('admin.deposit.pending');
    Route::get('/deposit/list', function () {return view('admin.deposit.details');})->name('admin.deposit.list');
    
});

require __DIR__.'/auth.php';
