<?php

use App\Http\Controllers\api\V1\AuthApiController;

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('/login', [AuthApiController::class, 'login']);
        Route::middleware('auth:api')->group(function(){
            Route::get('/me',[AuthApiController::class,'me']);
            Route::post('/logout',[AuthApiController::class,'logout']);
            Route::post('/refresh',[AuthApiController::class,'refresh']);
        });
    });
});
?>