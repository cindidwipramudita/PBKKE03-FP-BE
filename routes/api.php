<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/train', [TrainController::class, 'index']);
// Route::post('/train', [TrainController::class, 'store']);
// Route::get('/train/{id}', [TrainController::class, 'show']);
// Route::put('/train/{id}', [TrainController::class, 'update']);
// Route::delete('/train/{id}', [TrainController::class, 'destroy']);

Route::resource('/train', TrainController::class);