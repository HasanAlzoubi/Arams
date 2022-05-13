<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class City extends Model
{
    use Notifiable;

    protected $table='city';
    public $timestamps=false;
    protected $fillable=[
        'id','name','country_id'

    ];
    protected $hidden=[
        'updated_at','created_at'
    ];

    public function property(){
       return $this->hasMany('App\Property');
    }


}
