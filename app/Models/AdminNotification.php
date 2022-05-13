<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminNotification extends Authenticatable
{
    use Notifiable;
    protected $table='admin_notification';
//    public $timestamps=false;

    protected $fillable = [
        'user_id','property_id', 'message','view',

        'updated_at','created_at',
    ];


    protected $hidden = [
       'updated_at'
    ];


}
