<?php

use Illuminate\Http\Request;

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


//Route::middleware(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
//    Route::post('/register', 'API\V1\AuthController@register');
//    Route::post('/login', 'API\V1\AuthController@login');
//    Route::post('/logout', 'API\V1\AuthController@logout');
////    Route::get('updategcvs', 'API\V1\AssessmentController@updateGcvs');
////    Route::get('publicassessment/{id}', 'API\V1\PublictestController@publicTest');
//});
