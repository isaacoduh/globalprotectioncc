<?php

use App\Http\Controllers\APIController;
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

Route::get('/person/latest/{api_token}', [APIController::class, 'latest'])->name('person.latest')->middleware('api_token');
Route::get('/person/generate/{api_token}', [APIController::class, 'generatePerson'])->name('person.generate')->middleware('api_token');
Route::get('/person/stats/{api_token}', [APIController::class, 'generateStatistics'])->name('person.stats')->middleware('api_token');
Route::get('/person/{id}/{api_token}', [APIController::class, 'show'])->name('person.show')->middleware('api_token');
Route::get('/person/avatar/{id}/{api_token}', [APIController::class, 'generateAvatar'])->name('person.generate.avatar')->middleware('api_token');
