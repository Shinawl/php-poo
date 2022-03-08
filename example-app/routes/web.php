<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

    dump(\App\Models\User::all());
    Route::get('/post/create', [UsersController::class, 'create']);
    Route::post('/post', [UsersController::class, 'store']);

    return view('welcome');
});

Route::resource('users', UsersController::class);


