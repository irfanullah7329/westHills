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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
   Axios API calls
*/


// Admin Axios Authentication system
/*Route::group(['as'=>'admin.', 'prefix'=>"admin",'namespace'=>'Admin', 'middleware' => ['auth','admin']],
function() {
    Route::get('/add-camera','ChurchContoller@axiosAddCamera')->name('axios.add.camera'); 

});*/