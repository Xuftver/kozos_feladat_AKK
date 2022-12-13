<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
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
Route::apiResource("/api/events", EventController::class);
// participate
Route::get("/api/participates", [ParticipateController::class, "index"]);
Route::get("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "show"]);
Route::post("/api/participates", [ParticipateController::class, "store"]);
Route::put("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "update"]);
Route::delete("/api/participates/{event_id}/{user_id}", [ParticipateController::class, "destroy"]);
//user

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth.basic')->group(function () 
{
    Route::apiResource('');
});

require __DIR__.'/auth.php';
