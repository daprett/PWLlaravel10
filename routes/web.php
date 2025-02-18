<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
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

Route::get('/', function () { // Menampilkan halaman 'welcome' saat pengguna mengakses root URL 
    return view('welcome');
});

Route::resource('items', ItemController::class);// Menyediakan rute restful untuk resource 'items, dengan itemcontroller