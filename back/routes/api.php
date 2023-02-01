<?php

use App\Http\Controllers\SweetController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CsokoladeController;
use App\Http\Controllers\RagcsakController;
use App\Http\Controllers\HariboController;
use App\Http\Controllers\MilkaController;
use App\Http\Controllers\MogyiController;
use App\Http\Controllers\MarsController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/post', [PostController::class, 'get']);

Route::get('/teszt', function () {
    return view('teszt');
});

Route::get('/sweets',[SweetController::class,'index']);
Route::get('/gumicuki', [CategoryController::class, 'get']);
Route::get('/csoki', [CsokoladeController::class, 'get']);
Route::get('/ragcsak', [RagcsakController::class, 'get']);
Route::get('/haribo', [HariboController::class, 'get']);
Route::get('/milka', [MilkaController::class, 'get']);
Route::get('/mogyi', [MogyiController::class, 'get']);
Route::get('/mars', [MarsController::class, 'get']);

