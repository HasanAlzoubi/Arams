<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserNotification extends Authenticatable
{
    use Notifiable;
    protected $table='user_notification';
//    public $timestamps=false;

    protected $fillable = [
         'user_id', 'message','view',

        'updated_at','created_at'
    ];


    protected $hidden = [
       'updated_at'
    ];


}
