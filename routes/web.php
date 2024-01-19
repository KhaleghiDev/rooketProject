<?php

use App\Http\Controllers\Admin\Content\CategoeyController;
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

Route::get('/', function () {
    return view('index');
});
// Route::prefix('adminpanel')->group(function () {
//     return view('admin.index');
// });
Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name("dashbord");
    Route::prefix('content')->group(function () {
        Route::get('/', function () {
            return view('admin.content.index');
        })->name('admin.content.list');;
    });
});
Route::resource('category',CategoeyController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
