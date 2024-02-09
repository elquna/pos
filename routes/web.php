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
Route::get('admin/addstockform', [PagesController::class,'addstockform']); 
Route::post('admin/processaddstock', [PagesController::class,'processaddstock']); 

Route::get('/admin/viewstocks', [PagesController::class,'viewstocks']); 

Route::get('/admin/viewstocksavailable', [PagesController::class,'viewstocksavailable']); 
Route::get('/admin/makesales', [PagesController::class,'makesales']); 

Route::post('admin/showaproductduringsale', [PagesController::class,'showaproductduringsale']);

Route::post('admin/showaproductduringsalewithcode', [PagesController::class,'showaproductduringsalewithcode']);


Route::post('admin/processaddtocart', [PagesController::class,'processaddtocart']);

Route::get('admin/barcode/{serial}', [PagesController::class,'barcode'])->name('barcode');

Route::post('admin/processcheckout', [PagesController::class,'processcheckout']);
Route::get('pos/print/{serial}', [PagesController::class,'printreceipt']);

Route::post('admin/deletefromcart', [PagesController::class,'deletefromcart']);

Route::get('admin/saleshistory', [PagesController::class,'saleshistory']);

Route::get('admin/flexiblehistory', [PagesController::class,'flexiblehistory']);
