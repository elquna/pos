<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;

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

/*Route::get('/admin', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::post('mainlogin', [AdminController::class,'processlogin']);
Route::get('admin/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
Route::get('admin/add_product', [AdminController::class,'addproduct'])->name('addproduct');
Route::get('admin/view_products', [AdminController::class,'viewproducts'])->name('viewproducts');
Route::get('admin/online_products', [AdminController::class,'onlineproducts'])->name('onlineproducts');
Route::get('admin/offline_products', [AdminController::class,'offlineproduct'])->name('offlineproducts');
Route::get('admin/formforproduct', [AdminController::class,'formforproduct'])->name('formforproduct');*/


Route::get('/', [PagesController::class,'login'])->name('login');
Route::post('mainlogin', [PagesController::class,'processlogin']);
Route::get('pos/dashboard', [PagesController::class,'dashboard'])->name('dashboard');
