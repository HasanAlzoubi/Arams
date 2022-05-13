<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminMessage extends Authenticatable
{
    use Notifiable;
    protected $table='admin_messages';
//    public $timestamps=false;

    protected $fillable = [
        'user_id','title', 'property_id','message_user','name_user',
        'email_user','mobile_user',
        'updated_at','created_at',
    ];


    protected $hidden = [
       'updated_at'
    ];


}
