<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('gooditems', ProductController::class);
// Route::get('/gooditems', [ProductController::class, 'index']);   
// Route::post('/gooditems', [ProductController::class,'store']);  
// Route::get('/gooditems/{product}', [ProductController::class,'show']);
// Route::put('/gooditems/{product}', [ProductController::class, 'update']);
// Route::delete('/gooditems/{product}', [ProductController::class, 'destroy']);
