# laravel-rest
Laravel Restful project

## Install Laravel
```
composer create-project laravel/laravel NewProject
```
## Install cors
ref: https://github.com/barryvdh/laravel-cors


## Create Route

### Add Resource
```
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

```

### Add Controller
