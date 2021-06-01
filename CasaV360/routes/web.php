<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/contact', [ContactsController::class, 'create'])->name('contact');
Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/mail/{id}', [App\Http\Controllers\AdminController::class, 'show'])->whereNumber('id')->name('admin.message')->middleware('is_admin');

//Route::get('/user/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');


