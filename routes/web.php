<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;

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
    return view('index',['title' => 'Mainpage']);
});
Route::get('/notes', [NotesController::class,'index']);
Route::post('/notes', [NotesController::class,'formsubmit']);
Route::get('/crud',[Controller::class,'crud']);
Route::get('/chart',[Controller::class,'chart']);
Route::resource('post',PostController::class);
Route::resource('comment',CommentController::class);
