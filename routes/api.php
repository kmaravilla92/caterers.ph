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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('caterers/services', 'REST\Caterers\ServiceController');
Route::resource('caterers', 'REST\Caterers\CatererController');
// Route::resource('caterers/{caterer_id}/services');
// Route::resource('caterers/{caterer_id}/services/{service_id}/leads');

// Route::resource('customers');
