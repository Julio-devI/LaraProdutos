<?php

namespace App\Http\Controllers\Site;

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
//Routes the Site and pages
//Route from the home
Route::get('/', [HomeController::class, '__invoke'])->name('site.home');
//Route Products
Route::get('produtos', [CategoryController::class, 'index'])->name('site.products');
Route::get('produtos/{category}', [CategoryController::class, 'show'])->name('site.products.category');
//Route Blog
Route::get('blog', [BlogController::class, '__invoke'])->name('site.blog');
//Route about
Route::view('sobre', 'site.about.index')->name('site.about');
//Routes Contacts
Route::get('contato', [ContactController::class, 'index'])->name('site.contact');
Route::post('contato', [ContactController::class, 'form'])->name('site.contact.form');