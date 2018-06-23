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

Route::get('/', function () {
    return view('welcome');
});

///Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/////////////////////////////////////////////
/// Public
/////////////////////////////////////////////

/// Landing Page
Route::get('/', [
    'uses' => 'HomeController@landingPage',
    'as' => 'landingPage'
]);

/// Register Page
Route::get('/register', [
    'uses' => 'HomeController@registerPage',
    'as' => 'register'
]);
/// Register User
Route::post('/register', [
    'uses' => 'UserController@register',
    'as' => 'register'
]);


/// Login Page
Route::get('/login', [
    'uses' => 'HomeController@loginPage',
    'as' => 'login'
]);
/// Login User
Route::post('/login', [
    'uses' => 'UserController@login',
    'as' => 'login'
]);


/// Logout
Route::get('/logout', [
    'uses' => 'UserController@logout',
    'as' => 'logout'
]);


/// Home Page
Route::get('/home', [
    'uses' => 'HomeController@homePage',
    'as' => 'home'
]);


/////////////////////////////////////////
/// Profile Page
/////////////////////////////////////////

/// Profile Settings
Route::get('/settings', [
    'uses' => 'ProfileController@profileSettingsPage',
    'as' => 'profile.settings'
]);
/// Edit Profile Settings
Route::post('/settings/edit', [
    'uses' => 'ProfileController@editProfileInfo',
    'as' => 'profile.settings.edit'
]);
/// upload profile photo
Route::post('/profile', [
    'uses' => 'ProfileController@changeProfileImage',
    'as' => 'profile.updatePhoto'
]);



/// Profile Page
Route::get('/profile/{id}', [
    'uses' => 'ProfileController@profilePage',
    'as' => 'profile'
]);


/////////////////////////////////////////
/// Follow System
/////////////////////////////////////////
/// Follow Profile
Route::post('/profile/follow', [
    'uses' => 'ProfileController@followUser',
    'as' => 'follow'
]);
/// UnFollow Profile
Route::post('/profile/unfollow', [
    'uses' => 'ProfileController@unFollowUser',
    'as' => 'unfollow'
]);


/////////////////////////////////////////
/// Like System
/////////////////////////////////////////
/// Like Photo
Route::post('/photo/like', [
    'uses' => 'ProfileController@likePhoto',
    'as' => 'photo.like'
]);
/// UnLike Photo
Route::post('/photo/unlike', [
    'uses' => 'ProfileController@unlikePhoto',
    'as' => 'photo.unlike'
]);




/////////////////////////////////////////
/// Comment System
/////////////////////////////////////////
/// Add Comment To Photo Photo
Route::post('/photo/comment', [
    'uses' => 'ProfileController@commentOnPhoto',
    'as' => 'photo.comment'
]);
/// Edit Comment On Photo
Route::post('/photo/comment/edit', [
    'uses' => 'ProfileController@editComment',
    'as' => 'photo.comment.edit'
]);
/// Remove Comment From A Photo
Route::post('/photo/comment/remove', [
    'uses' => 'ProfileController@deleteComment',
    'as' => 'photo.comment.remove'
]);





/////////////////////////////////////////
/// Popup System
/////////////////////////////////////////
/// Show Popup
Route::post('/showPopup', [
    'uses' => 'HomeController@showPopup',
    'as' => 'showPopup'
]);
