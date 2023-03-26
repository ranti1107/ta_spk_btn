<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NasabahController;

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

Route::get('/', function () {
    return view('Admin.beranda');
});

Route::prefix('Admin')->group(function(){
	Route::get('beranda', [AdminController::class, 'Beranda']);

	Route::get('nasabah', [NasabahController::class,'BerandaNasabah']);
});
