<?php


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('user/{id}/sms', 'Api\UserController@sms');
Route::get('user/{id}/paymentslip', 'Api\UserController@paymentslip');
Route::apiResource('user', 'Api\UserController');

Route::get('sms/{id}/user', 'Api\SmsController@user');
Route::apiResource('sms', 'Api\SmsController');

Route::get('paymentslip/{id}/user', 'Api\PaymentSlipController@user');
Route::apiResource('paymentslip', 'Api\PaymentSlipController');