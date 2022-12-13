<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipateController;
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

Route::apiResource("/api/events", EventController::class);

Route::get("/api/participates", [ParticipateController::class, "index"]);
Route::get("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "show"]);
Route::post("/api/participates", [ParticipateController::class, "store"]);
Route::put("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "update"]);
Route::delete("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "destroy"]);
