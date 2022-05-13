<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table='admins';
//    public $timestamps=false;

    protected $fillable = [
        'name', 'email', 'password','mobile',
        'address', 'photo',
        'remember_token',
        'updated_at','created_at'
    ];


    protected $hidden = [
       'updated_at','remember_token',
    ];


}
