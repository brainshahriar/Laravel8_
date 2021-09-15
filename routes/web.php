<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\First;
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


Route::get('/dashboard', [First::class, 'index']);
Route::get('/action', [First::class, 'index2'])->name('my.page');
