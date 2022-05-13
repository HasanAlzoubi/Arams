<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Country extends Model
{
    use Notifiable;
    protected $table='country';
    public $timestamps=false;

    protected $fillable=[
     'id','name'
    ];
    protected $hidden=[
        'updated_at','created_at'
    ];
}
