<?php


Route::group(['prefix' => 'api/v1'], function () {
  // Meetings Router
  Route::resource('meetings', 'MeetingController', [
    'except' => ['edit', 'create']
  ]);

  // Meeting Registration Router
  Route::resource('meetings/registration', 'RegistrationController', [
    'only' => ['stroe', 'destroy']
  ]);

  // Create New user Route
  Route::post('user', [
    'user' => 'AuthController@store'
  ]);

  // User signin Route
  Route::post('user/signin', [
    'user' => 'AuthController@signin'
  ]);
});
