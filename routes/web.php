<?php

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

Route::group(['middleware' =>['web']],function(){

//Authentication Routes
Route::get('auth/login','Auth\LoginController@showLoginForm')->name('login'); //get form
Route::post('auth/login','Auth\LoginController@login'); //send form
Route::get('auth/logout','Auth\LoginController@logout')->name('logout');
//above name(param) is the same as '[as]=> named.route', it's new less error prone

//Password reset
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//Registration route
Route::get('auth/register','Auth\RegisterController@showRegistrationForm')->name('register'); //get form
Route::post('auth/register', 'Auth\RegisterController@register'); //send form


// verify what comes into this slug parameter after parenthesis where can be added to verify the info coming in, regex meaning: any letter, any number, any - and _, plus any others with this sequence defines what the slug can take
Route::get('/blog/{slug}',['as' => 'blog.single','uses' => 'BlogController@getSingle'])->where('slug','[\w\d\-\_]+'); //second paramater is the named route, as = name and uses means the function such as a controller it references to

Route::get('/blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);

Route::get('/contact', 'PagesController@getContact');

Route::get('/about','PagesController@getAbout');

/*
Display tasks
*/
Route::get('/','PagesController@getIndex');

Route::get('/info_input','PagesController@getInfo');

Route::resource('/posts','PostController');

});

