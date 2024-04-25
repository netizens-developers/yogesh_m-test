<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

Auth::routes([
    'register' => false
]);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('servey', QuestionController::class);
    Route::get('thank-you', [QuestionController::class, 'thanks'])->name('thanks');
});
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.home');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
