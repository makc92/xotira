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
/*Route::get('/', function () {
    return redirect(app()->getLocale());
});*/
Route::get('/', 'RedirectController');

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'localization'], function() {
    Route::get('/', 'Front\MainPageController@index')->name('main');
    Route::get('/news', 'Front\NewsController@index')->name('news');
    Route::get('/news/{slug}', 'Front\NewsController@show')->name('news.show');
    Route::get('/memory', 'Front\VeteransController@index')->name('memory');
    Route::get('/memory/{region}', 'Front\VeteransController@indexByRegion')->name('memory.regions');
    Route::get('/achievements', 'Front\AchievementsController@index')->name('achievements');
    Route::get('/achievements/{slug}', 'Front\AchievementsController@show')->name('achievements.show');
    Route::get('/library', 'Front\LibraryController@index')->name('library');
    Route::get('/info', 'Front\InfoController@index')->name('info');
    Route::post('/info/sendForm', 'Front\InfoController@store')->name('info.send');
    Route::get('/photos', 'Front\PhotosController')->name('photos');
    Route::get('/museum', 'Front\MuseumController@index')->name('museum.main');
    Route::get('/museum/administration/{slug}', 'Front\MuseumController@showTeamMember')->name('museum.teams.show');
    Route::view('/museum/exposition', 'front.pages.museum.exposition')->name('museum.exposition');
    Route::get('/refreshCaptcha', 'Front\RefreshCaptchaController')->name('captcha.refresh');
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
        Route::resource('photos', 'PhotosController');
        Route::resource('teams', 'TeamsController');
        Route::get('clear', 'ClearController');
    }
);

/*Route::get('/home', 'HomeController@index')->name('home');*/
