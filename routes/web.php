<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/dashboard', function () {
        return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('dashboard',DashboardController::class)->middleware(['auth']);
Route::resource('venue',VenueController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
