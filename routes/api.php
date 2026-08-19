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


// API
Route::post('/generate-quotation', [App\Http\Controllers\Controller::class, 'generateQuotationNumber']);
Route::post('/save-form', [App\Http\Controllers\Controller::class, 'saveForm']);
Route::get('/api/quotation/{quotation_no}', [App\Http\Controllers\Controller::class, 'getQuotationData']);
