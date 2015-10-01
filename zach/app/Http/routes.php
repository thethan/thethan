<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Blog pages

Route::get('/home', function(){
    return redirect('/');
});

Route::get('/','BlogController@showIndex');

Route::get('about', 'BlogController@showAbout');

Route::get('works', 'BlogController@showWorks');

Route::get('contact', 'BlogCOntroller@showContact');

Route::get('news', 'BlogController@showNews');

Route::get('blog', 'BlogController@index');

Route::get('blog/{slug}','BlogController@showPost');

//Admin area
get('admin',function(){
    return redirect('/admin/post');
});

$router->group([
    'namespace' => 'Admin',
    'middleware' => 'admin',
], function(){
    resource('admin/post', 'PostController',['except' => 'show']);
    resource('admin/page', 'PagesController');

    resource('admin/tag', 'TagController', ['except' => 'show']);
    resource('admin/category', 'CategoryController', ['except' => 'show']);
    resource('admin/works', 'WorksController', ['except' => 'show']);

    get('admin/upload', 'UploadController@index');

    post('admin/upload/file', 'UploadController@uploadFile');
    post('admin/upload/fromeditor', 'UploadController@uploadJustFile');
    delete('admin/upload/file', 'UploadController@deleteFile');

    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');
});

$router->group([
   'namespace' => 'Dashboard',
    'middleware' => 'auth',
], function(){

});

//Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');

//Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


