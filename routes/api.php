<?php

use App\Http\Controllers\TeamController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::middleware('auth:api')->namespace('team')->group(function () {
Route::namespace('team')->group(function () {
	Route::get('/team', [TeamController::class, 'index']);
	Route::get('/team/{id}', [TeamController::class, 'show']);
	Route::put('/team/{id}', [TeamController::class, 'update']);
	Route::delete('/team/{id}', [TeamController::class, 'destroy']);
});