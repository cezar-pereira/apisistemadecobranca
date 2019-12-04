<?php


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('user/{id}/sms', 'Api\UserController@sms');
Route::apiResource('user', 'Api\UserController');

Route::get('sms/{id}/user', 'Api\SmsController@user');
Route::apiResource('sms', 'Api\SmsController');