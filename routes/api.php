<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
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

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);


Route::middleware('auth:sanctum')->apiResource('rooms', RoomController::class);
Route::middleware('auth:sanctum')->post('logout',  [UserController::class, 'logout']);


// GET /rooms - vrati sve sobe iz baze - index 
// GET /rooms/{id} - vrati sobu sa datim id  - jem - show
// POST /rooms - kreiraj sobu sa podacima iz tela zahteva - store 
// PUT /rooms/{id} - izmeni sobu sa datim id  - jem podacima iz tela zahteva - update
// DELETE /rooms/{id} - obrisi sobu sa datim id - jem - destroy