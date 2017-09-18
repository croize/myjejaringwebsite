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



    Route::resource('/', 'UtamaController');




Auth::routes();
Route::group(['middleware' => 'revalidate'],function(){
Route::get('/home', 'HomeController@index');
Route::resource('/myjejaring/dashboard', 'DashboardController');
Route::resource('/myjejaring/header', 'MyjejaringController');
Route::resource('/myjejaring/gallery', 'GalleryController');//
Route::resource('/myjejaring/monitor', 'UsermonitoringController');
Route::resource('/myjejaring/changepassword', 'PanelpasswordController');
Route::resource('/myjejaring/user/changepassword', 'UserConfigPassword');
Route::resource('/myjejaring/user/changeprofile', 'UserConfigProfil');
Route::resource('/myjejaring/about', 'AboutController');
Route::resource('/myjejaring/feature', 'FeatureController');//
Route::resource('/myjejaring/profile', 'TeamController');
Route::resource('/myjejaring/footer', 'FooterController');
Route::resource('/myjejaring/social', 'MediaController');
Route::get('notification', 'DashboardController@notification');
Route::post('myjejaring/feature/ajax' , 'FeatureController@ajax');
Route::post('/myjejaring/ajax' , 'FeatureController@insert');
});
Route::get('access',function(){
  return view('rifqi');
});
Route::get('error',function(){
  return view('rifqi');
});
