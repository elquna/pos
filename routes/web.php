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



Route::get('/', [PagesController::class,'login'])->name('home');
Route::post('mainlogin', [PagesController::class,'processlogin']);
Route::get('pos/dashboard', [PagesController::class,'dashboard'])->name('dashboard');
Route::get('admin/formforuser', [PagesController::class,'formforuser'])->name('formforuser');
Route::post('admin/processaddnewuser', [PagesController::class,'processaddnewuser'])->name('processaddnewuser');
Route::get('admin/viewusers', [PagesController::class,'viewusers']); 
Route::get('admin/addcat', [PagesController::class,'addcat']); 
Route::post('admin/processaddcategory', [PagesController::class,'processaddcategory'])->name('processaddcategory');
Route::get('admin/viewcat', [PagesController::class,'viewcat']); 


Route::get('admin/addproductform', [PagesController::class,'addproductform']); 
Route::post('admin/processaddproduct', [PagesController::class,'processaddproduct']); 

Route::get('admin/viewproducts', [PagesController::class,'viewproducts']); 

