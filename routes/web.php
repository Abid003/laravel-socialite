<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/editprofile', [App\Http\Controllers\HomeController::class, 'editprofile']);


Route::post('/updateprofile',[HomeController::class, 'updateprofile']);
//google login
Route::get('auth/google', 'GoogleController@googleRedirect');
Route::get('auth/google/callback', 'GoogleController@loginWithGoogle');

//fb login
// Route::controller(GoogleController::class)->group(function(){
//     Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
//     Route::get('auth/facebook/callback', 'handleFacebookCallback');
// });

Route::get('auth/facebook', 'GoogleController@redirectToFacebook');
Route::get('auth/facebook/callback', 'GoogleController@handleFacebookCallback');