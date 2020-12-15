<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return redirect(app()->getLocale());
});
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'localization'], function() {
    Route::get('/', 'Front\MainPageController@index')->name('main');
    Route::get('/news', 'Front\NewsController@index')->name('news');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
        'middleware' => ['auth']
    ],
    function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::post('ckeditor/image_upload', 'CheckEditorController@upload')->name('upload');
        Route::resource('users', 'UsersController');
        Route::resource('veterans', 'VeteransController');
        Route::resource('news', 'NewsController');
        Route::resource('books', 'BooksController');
        Route::resource('achievements', 'AchievementsController');
        Route::resource('applications', 'ApplicationsController');
    }
);

/*Route::get('/home', 'HomeController@index')->name('home');*/
