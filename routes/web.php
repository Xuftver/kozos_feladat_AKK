<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () 
{
    // return view('nyitolap');
    return view('index');
})->middleware();

Route::get('/dashboard', function () 
{
    // return view('profiloldal');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(["admin"])->group(function()
{
    Route::get('/api/users', [UserController::class,'index']);
    Route::get('/api/users/{id}', [UserController::class,'show']);
    Route::post('/api/users', [UserController::class,'store']);
    Route::put('/api/users/{id}', [UserController::class,'update']);
    Route::patch('/api/users/{id}', [UserController::class,'update']);
    Route::delete('/api/users/{id}', [UserController::class,'destroy']);
});

//event
// Route::apiResource("/api/events", EventController::class);
Route::get("/api/events", [EventController::class, "index"]);
Route::get("/api/events/{id}", [EventController::class, "show"]);
Route::post("/api/events", [EventController::class, "store"]);
Route::put("/api/events/{id}", [EventController::class, "update"]);
Route::delete("/api/events/{id}", [EventController::class, "destroy"]);
// participate
Route::get("/api/participates", [ParticipateController::class, "index"]);
Route::get("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "show"]);
Route::post("/api/participates", [ParticipateController::class, "store"]);
Route::put("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "update"]);
Route::delete("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "destroy"]);
//user
Route::get('/api/users', [UserController::class, 'index']);
Route::get('/api/users/{id}', [UserController::class, 'show']);
Route::post('/api/users', [UserController::class, 'store']);
Route::put('/api/users/{id}', [UserController::class, 'update']);
Route::patch('/api/users/{id}', [UserController::class, 'update']);
Route::delete('/api/users/{id}', [UserController::class, 'destroy']);

Route::middleware(['agency'])->group(function () {
    Route::apiResource('/agency', AgencyController::class);
    Route::get('/api/agencies', [AgencyController::class, 'index']);
    Route::get('/api/agencies/{id}', [AgencyController::class, 'show']);
    //Middleware-->VerifyCsrfToken.php
    Route::post('/api/agency/', [AgencyController::class, 'store']);
    Route::put('/api/agencyupdate/{id}', [AgencyController::class, 'update']);
    Route::delete('/api/agencydestroy/{id}', [AgencyController::class, 'destroy']);
    Route::delete('/api/agencydestroy/{id}', [AgencyController::class, 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware('auth.basic')->group(function () 
// {
//     Route::apiResource('');
// });

require __DIR__.'/auth.php';
