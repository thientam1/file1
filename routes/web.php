<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\tutarialController;
use App\Http\Controllers\forumController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\demoController;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;

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

Route::get('/',[indexController::class,'index'])->name('index');
Route::get('/home',[indexController::class,'index'])->name('index');
Route::get('/tutorial',[tutarialController::class,'tutorial'])->name('tutorial');

Route::get('/blog',[blogController::class],'blog')->name('blog');


Route::get('/basic_site',[demoController::class,'basic'])->name('basic');
Route::get('/praticec_site',[demoController::class,'practice'])->name('practice');
Route::get('/actions_site',[demoController::class,'actions'])->name('actions');
Route::get('/ecommerce',[demoController::class,'ecommerce'])->name('ecommerce');

#đăng nhập
Route::post('/login',[authController::class, 'loginUser'])->name('login');

#forum
Route::get('/forum1',[forumController::class,'forum'])->name('forum');
Route::get('/forum2',[forumController::class,'forum2'])->name('forum2');
Route::get('/quest',[forumController::class,'quest'])->name('quest');
Route::post('/save_questgd',[forumController::class,'save_questgd'])->name('save_quest');
Route::get('/quest{id}',[forumController::class,'detail']);

#admin
Route::get('/admin',[adminController::class,'index'])->name('admin');
Route::get('/blog_add',[adminController::class,'blog_add'])->name('blog_add');
