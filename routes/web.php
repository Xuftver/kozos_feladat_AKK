<?php

use App\Http\Controllers\AgencyController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/agencies', [AgencyController::class, 'index']);
Route::get('/api/agencies/{id}', [AgencyController::class, 'show']);
//Middleware-->VerifyCsrfToken.php
Route::post('/api/agency/',[AgencyController::class, 'store']);
Route::put('/api/agencyupdate/{id}', [AgencyController::class, 'update']);
Route::delete('/api/agencydestroy/{id}', [AgencyController::class, 'destroy']);
