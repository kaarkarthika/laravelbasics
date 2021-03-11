<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InsertController;

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
Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getallpost');
Route::get('/user',[UserController::class,'index'])->name('user.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');
Route::post('/login',[LoginController::class,'loginsubmit'])->name('login.submit');
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.store');
Route::get('/session/remove',[SessionController::class,'deleteSessionData'])->name('session.delete');

Route::get('/insert',[InsertController::class,'insertform'])->name('post.insertform');
Route::post('/create',[InsertController::class,'insert'])->name('post.insert');
Route::get('/insert/{id}',[InsertController::class,'getPostById'])->name('post.getbyid');
Route::get('/delete-post/{id}',[InsertController::class,'deletepost'])->name('post.delete');
Route::get('/edit-post/{id}',[InsertController::class,'editpost'])->name('post.edit');
Route::post('/update-post',[InsertController::class,'updatePost'])->name('post.update');
Route::get('/inner-join',[PostController::class,'innerJoinCaluse'])->name('post.innerjoin');
Route::get('/left-join',[PostController::class,'leftJoinCaluse'])->name('post.leftjoin');
Route::get('/right-join',[PostController::class,'rightJoinCaluse'])->name('post.rightjoin');
Route::get('/all-posts',[PostController::class,'getAllPostsUsingModel'])->name('post.getallpostsusingmodel');

