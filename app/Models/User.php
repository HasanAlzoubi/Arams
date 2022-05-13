<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table='users';
//    public $timestamps=false;

    protected $fillable = [
        'name', 'email', 'password',
        'address', 'photo', 'page_name',
        'profile_type', 'can_view','remember_token',
        'updated_at','created_at'
    ];


    protected $hidden = [
       'updated_at'
    ];


}
