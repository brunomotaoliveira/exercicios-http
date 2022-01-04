<?php

use App\Http\Controllers\CorreiosController;
use App\Http\Controllers\GithubController;
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

Route::get("/buscardados/all", [CorreiosController::class, 'buscardados']);

Route::get("/buscargithub", [GithubController::class, 'buscargithub']);