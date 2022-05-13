<?php

use App\Notifications\RealTimeNotification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/send_notifiation', function () {
//  $user=\App\Models\User::where('email','ahmadalzoubi@gmail.com')->first();
//
//  $user->notify((new RealTimeNotification('hello Ahmad',17)));
//  return 'vsdbvs';
//});



Route::get('/errore', function () {
    return view('Aram.Errore404');
});

Route::get('/edit', function () {
    return view('Aram.User.User_edit');
});

Route::get('/agent', function () {
    return view('Aram.Agents');
});



Route::group(['namespace' => 'Arams','prefix'=>'aram'],function (){

    Route::get('/', 'Main_Page@show')->name('main.page');
    Route::get('/ss', 'About_Us@view')->name('About.us');
    Route::get('/2', 'Main_Page@main_page2')->name('main.page2');




});


Route::group(['namespace' => 'Arams\Property','prefix'=>'aram/property'],function (){

    Route::get('/add','Add_Property@view')->name('Add_Property')->middleware('auth:user');
    Route::get('/Ajax_city_add_property/{id}', 'Add_Property@city');
    Route::get('/Ajax_area_add_property/{id}', 'Add_Property@area');
    Route::post('property', 'Add_Property@creat')->name('add_property');


    Route::get('/filter', 'property_filter@show')->name('Search_Filter');
    Route::get('/details', 'property_details@show')->name('property_details');


});







Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::patch('/fcm-token', 'HomeController@updateToken')->name('fcmToken');
Route::post('/send-notification','HomeController@notification')->name('notification');
