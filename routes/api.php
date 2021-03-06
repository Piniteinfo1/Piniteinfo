<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/user', [App\Http\Controllers\DataController::class, 'UserCheck'])->name('user');
Route::post('/selectcategories', [App\Http\Controllers\DataController::class, 'SelectCategories'])->name('selectcategories');
Route::get('/categoriesList', [App\Http\Controllers\DataController::class, 'categoriesList'])->name('categoriesList');
Route::post('/ContactDesigner', [App\Http\Controllers\user\ContactDesignerController::class, 'ContactDesigner'])->name('ContactDesigner');
Route::post('/messagedesigner', [App\Http\Controllers\user\ChatController::class, 'MessageToDesigner'])->name('messagedesigner');

