<?php
use Illuminate\Support\Facades\Route;

Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::group(['middleware'=>['jwt.auth']],function (){

      Route::get('/my_posts', [App\Http\Controllers\Api\UsersController::class, 'index']); 

     Route::post('/logout',[App\Http\Controllers\Api\AuthController::class, 'logout']);
      
     
});
