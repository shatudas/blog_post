<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\homeController;

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

// Route::get('/', function () {return view('frontend.home');
// });

Route::get('/',[homeController::class,'homepage'])->name('/');
Route::get('search',[homeController::class,'searchmethod'])->name('search');
Route::get('single_page/{slug}',[homeController::class,'single_page'])->name('single_page');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'],function(){
 

 
 //-------user---------//
	Route::prefix('blog')->group(function()
	{
		Route::get('/view',[PostController::class,'view'])->name('blog.view');
		Route::get('/add',[PostController::class,'add'])->name('blog.add');
		Route::post('/store',[PostController::class,'store'])->name('blog.store');
		Route::get('/edit/{id}',[PostController::class,'edit'])->name('blog.edit');
		Route::post('/update/{id}',[PostController::class,'update'])->name('blog.update');
		Route::get('/delete/{id}',[PostController::class,'delete'])->name('blog.delete');
		Route::get('/active/{id}',[PostController::class,'active'])->name('blog.active');
		Route::get('/inactive/{id}',[PostController::class,'inactive'])->name('blog.inactive');
	});



});
