<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Arams\Administrator','guest:Administrator'],function (){

    Route::get('/Login','Login_Administrator@view')->name('Administrator_get_login');
    Route::post('/Login','Login_Administrator@login')->name('Administrator_set_login');


});


Route::group(['namespace'=>'Arams\Administrator','middleware'=>'Administrator_auth:Administrator'],function (){

    Route::get('/','Dashboard@view')->name('manger_profile');
    Route::get('/Users','User_Table@view')->name('users_table');
    Route::get('/delete_user/{id}','User_Table@delete');

    Route::get('/Logout','Logout_Administrator@logout')->name('Administrator_logout');
    //Admins

    Route::get('/Add_Admin','Add_Admin@view')->name('Add_Admin');
    Route::post('/Add_Admin','Add_Admin@add')->name('add_admins');

    Route::get('/Admin_Details/{id}','Admin_Details@view')->name('Details');
    Route::post('/update/{id}','Admin_Details@update')->name('Update');
    Route::get('/delete/{id}','Delete_Admin@delete')->name('Delete');
});

