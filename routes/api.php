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

Route::middleware(['obtainAuthorizationToken'])->group(function () {
    Route::get('/api/get_token', 'Api/General/client_credentails_grant@obtain_access_token')->name('getToken');
});
