<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotaluserController;
use App\Http\Controllers\PerjalananController;




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
    return view('auth.login');
});

Auth::routes();

Route::get('/Total_user', [TotaluserController::class,'index'])->name('Total_user');


Route::get('/perjalanan', [PerjalananController::class,'index'])->name('perjalanan');
Route::get('/isi_data', [PerjalananController::class,'create'])->name('isi-data');
Route::post('/store', [PerjalananController::class,'store'])->name('store perjalanan');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


