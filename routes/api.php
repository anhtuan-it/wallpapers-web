<?php

use App\Http\Resources\Type;
use App\Http\Resources\Wallpapers;
use App\Type as AppType;
use App\User;
use App\Wallpapers as AppWallpapers;
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

Route::apiResource('types', 'APIController');

Route::get('/type', function() {
    return AppType::all();
});

Route::get('/users', function() {
    return User::all();
});
