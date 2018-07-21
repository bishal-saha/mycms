<?php /** @noinspection PhpUndefinedClassInspection */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/verification/{token}', 'Auth\RegisterController@userVerification');

Route::get('/admin', function () {
    return redirect('adminHome');
});

Route::Group(['prefix' => env('BACKEND_PATH')], function () {
    // No permission
    Route::get('/403', function () {
        return view('backEnd.errors.403');
    })->name('NoPermission');

    // Not found
    Route::get('/404', function () {
        return view('backEnd.errors.404');
    })->name('NotFound');

    // Admin home
    Route::get('/', 'backEnd\HomeController@index')->name('adminHome');
});



Route::get('/mailable', function () {
    $user = App\User::find(1);
    return new App\Mail\UserVerificationMail($user);
});

