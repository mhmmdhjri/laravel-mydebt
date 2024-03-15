<?php

use App\Http\Controllers\DebtController;
use App\Models\Debt;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [DebtController::class, 'index']);
Route::get('/form', [DebtController::class, 'input']);
Route::post('/store', [DebtController::class, 'store']);
Route::get('/{id}/edit', [DebtController::class, 'edit']);
Route::put('/update/{id}', [DebtController::class, 'update']);
Route::delete('/update/{id}',[DebtController::class,'destroy']);