<?php

use Illuminate\Support\Facades\Route;


//any one will go to login or register
Route::group(['namespace' => 'Arams\User','middleware'=>'guest:user'],function (){

    Route::get('/Register', 'register@show')->name('Get.User.Register');
    Route::get('/Login', 'login@show')->name('Get.User.Login');
    Route::post('Register','register@add')->name('Set.User.Register');
    Route::post('Login', 'login@Login')->name('Set.User.Login');


});

Route::group(['namespace' => 'Arams\User','middleware'=>'auth:user'],function (){
    Route::get('/','Dashboard@show')->name('User.profile');

    Route::get('/Logout', 'logout@Logout')->name('user.logout');
    Route::post('/update/{user_id}','User_Information_Update@update')->name('user_update');
    Route::post('/Update/{user_id}','User_Information_Update@update_password');
    Route::get('/my_propertyes/{user_id}', 'my_propertyes@show')->name('My_property');

    Route::post('/view_notification','Notification@view')->name('view_user_notification');



});

