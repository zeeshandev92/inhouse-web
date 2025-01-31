<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\OfficeController;
use Illuminate\Support\Facades\Route;

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
require __DIR__.'/auth.php';

Route::middleware('auth')->prefix('admin')->group(function () {

	Route::redirect('/', '/admin/dashboard')->name('/');

	Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('analytics', function () {
        return view('admin.analytics');
    })->name('analytics');

    Route::get('user', function () {
        return view('admin.user');
    })->name('user');

    // Route::get('drivers', function () {
    //     return view('admin.drivers');
    // })->name('drivers');
    Route::resource('drivers', DriverController::class)->except(['show', 'create']);

	// Route::get('offices', function () {
    //     return view('admin.offices');
    // })->name('offices');
    Route::resource('offices', OfficeController::class)->except(['show', 'create']);

	Route::get('office-detail', function () {
        return view('admin.office-detail');
    })->name('office-detail');

    // Route::get('category', function () {
    //     return view('admin.category');
    // })->name('category');
    Route::resource('category', CategoryController::class)->except(['show', 'create']);

    Route::get('content', function () {
        return view('admin.content');
    })->name('content');

    Route::get('content-detail', function () {
        return view('admin.content-detail');
    })->name('content-detail');

    Route::get('calendar', function () {
        return view('admin.calendar');
    })->name('calendar');

    Route::get('employee', function () {
        return view('admin.employee');
    })->name('employee');

    Route::get('employee-detail', function () {
        return view('admin.employee-detail');
    })->name('employee-detail');

    Route::get('customization', function () {
        return view('admin.customization');
    })->name('customization');


});
