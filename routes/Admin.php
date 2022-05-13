<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'Arams\Admin'],function (){

 //////////send message from user to admin to rent or sale property

    Route::post('/send_message','Notification_Message@insert_message')->name('notification_admin_message');
    Route::post('/Admin_message','Notification_Message@viewed')->name('view_messages');
    Route::get('/message_detail/{id}','Message_Detals@view')->name('message_detail');

});



Route::group(['namespace'=>'Arams\Admin','middleware'=>'guest:Admin'],function (){


    Route::get('/Login','Login_Admin@view');
    Route::post('/Login','Login_Admin@login')->name('Admin_login_page');
});

Route::group(['namespace'=>'Arams\Admin','middleware'=>'Admin_auth:Admin'],function (){

    Route::get('/','Dashboard@view')->name('Admin_page');
    Route::get('/Logout','Logout_Admin@logout')->name('Admin_Logout');

    //property_edit
    Route::get('/property_edit/{id}','Property_Edit@view')->name('property_edit');
    Route::post('/property_edit','Property_Edit@update')->name('property_update');

    //property_delete
    Route::get('/property_delete/{id}','Property_Delete@delete');

    //edit_property
    Route::group(['prefix'=>'/property_edit'],function (){
    Route::get('/Ajax-city-edit-property/{id}', 'Property_Edit@city');
    Route::get('/Ajax-area-edit-property/{id}', 'Property_Edit@area');
    });


    //property_outstanding_details
    Route::get('/property_details','Property_Outstanding_Details@view')
        ->name('property_details');
    Route::get('/agree_property/{id}','Property_Outstanding_Details@agree');
    Route::get('/noagree_property/{id}','Property_Outstanding_Details@noagree');

    Route::post('/view_notification','Notification@view')->name('view_notification');


});

