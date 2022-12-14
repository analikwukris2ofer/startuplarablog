<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::resource('posts', PostsController::class); 
// this will automatically target the index method in the PostsController
//also all methods in the class will be automatically called when referred on the browser.

// Route::get('/about', function () {
//     return view('pages.about');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
