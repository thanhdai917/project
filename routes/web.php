<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidateController;

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

Route::get('/custom-rule/show', [ValidateController::class,'show'])->name('show');

Route::post('/custom-rule/validate', [ValidateController::class,'validateCustom'])->name('custom');