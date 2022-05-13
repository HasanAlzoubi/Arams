<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrator extends Authenticatable
{
    use Notifiable;
    protected $table='administrator';
//    public $timestamps=false;

    protected $fillable = [
        'name', 'email', 'password',
        'remember_token',

    ];


    protected $hidden = [

    ];


}
