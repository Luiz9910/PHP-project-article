<?php

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
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

Route::get('/', [ArticleController::class, 'index']);
Route::get("/read/article/{id}", [ArticleController::class, "readArticle"]);

Route::get('/user/register', [UserController::class, 'register']);
Route::post('/save/register', [UserController::class, 'registerUser']);


Route::get('/login', [UserController::class, 'login']);
Route::post('/auth', [UserController::class, 'auth'])->name('auth.user');

Route::group(['middleware'=>['session']], function() {

    Route::get('/article/create', [ArticleController::class, 'create']);
    Route::post('/article/save', [ArticleController::class,'store']);

    Route::get('/user/article', [ArticleController::class, 'myArticle']);
    Route::get("/article/edit/{id}", [ArticleController::class, 'edit']);
    Route::put('/article/up/{id}', [ArticleController::class, 'update']);

    Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy']);
});

Route::get("/logout", function () {
    session()->forget('data');
    return redirect('/login');
});