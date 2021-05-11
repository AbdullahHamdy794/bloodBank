<?php

use App\Http\controllers\api\authController;
use App\Http\controllers\api\mainController;
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
Route::group(['prefix'=>'v1'],function(){
    Route::get('governorate',[mainController::class,'governorate']);
    Route::get('citys',[mainController::class,'cities']);
    Route::post('register',[authController::class,'register']);
    Route::post('login',[authController::class,'login']);
    Route::get('bloodtype',[mainController::class,'bloodType']);
    Route::get('category',[mainController::class,'category']);
    Route::post('donationRequest',[mainController::class,'createDonationRequest']);
    Route::get('notification',[mainController::class,'notifications']);
    Route::post('editprofile',[mainController::class,'editprofile']);
    Route::post('editNotification',[mainController::class,'update']);
    Route::get('settings',[mainController::class,'setting']);
    Route::get('contacts',[mainController::class,'contacts']);
    Route::post('resetPassword',[mainController::class,'resetPassword']);

    Route::group(['middleware'=>'auth:api'],function(){
        Route::get('posts',[mainController::class,'posts']);


        });


});
