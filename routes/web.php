<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipateController;
use App\Http\Controllers\UserController;
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

//event
Route::apiResource("/api/events", EventController::class);
// participate
Route::get("/api/participates", [ParticipateController::class, "index"]);
Route::get("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "show"]);
Route::post("/api/participates", [ParticipateController::class, "store"]);
Route::put("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "update"]);
Route::delete("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "destroy"]);
//user
Route::get('/api/users', [UserController::class,'index']);
Route::get('/api/users/{id}', [UserController::class,'show']);
Route::post('/api/users', [UserController::class,'store']);
Route::put('/api/users/{id}', [UserController::class,'update']);
Route::patch('/api/users/{id}', [UserController::class,'update']);
Route::delete('/api/users/{id}', [UserController::class,'destroy']);
Route::get('/api/agencies', [AgencyController::class, 'index']);
Route::get('/api/agencies/{id}', [AgencyController::class, 'show']);
//Middleware-->VerifyCsrfToken.php
Route::post('/api/agency/',[AgencyController::class, 'store']);
Route::put('/api/agencyupdate/{id}', [AgencyController::class, 'update']);
Route::delete('/api/agencydestroy/{id}', [AgencyController::class, 'destroy']);

Route::delete('/api/agencydestroy/{id}', [AgencyController::class, 'destroy']);
