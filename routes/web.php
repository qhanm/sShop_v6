<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/clear-cache', function() {
    $exitCode = \Illuminate\Support\Facades\Artisan::call('cache:clear');
    // return what you want
});


Route::get('test', [\App\Http\Controllers\TestController::class, 'index']);
Route::get('test1', [\App\Http\Controllers\TestController::class, 'test2']);

Route::get('callback', [\App\Http\Controllers\TestController::class, 'callback']);

Route::get('/migrate', function () {
    dd(\Illuminate\Support\Facades\Artisan::call('migrate'));
});

Route::prefix('auth')->group( function () {
    Route::get('login', [\App\Http\Controllers\Backend\AuthController::class, 'login'])->name('auth.login');
    Route::post('login', [\App\Http\Controllers\Backend\AuthController::class, 'checkLogin'])->name('auth.checkLogin');
});

Route::prefix('admin')->group( function () {
    Route::get('dashboard', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::prefix('connection')->middleware(['admin.auth'])->group(function () {
        Route::get('/', [\App\Http\Controllers\Backend\ConnectionController::class, 'index'])->name('admin.connection.index');
        Route::get('callback', [\App\Http\Controllers\Backend\ConnectionController::class, 'callback'])->name('admin.connection.callback');
        Route::get('delete-info', [\App\Http\Controllers\Backend\ConnectionController::class, 'deleteInfo']);
    });
});

Route::get('/chinh-sach-rieng-tu', function () {
    return view('frontend.about');
});
