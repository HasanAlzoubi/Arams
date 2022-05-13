<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Area extends Model
{
    use Notifiable;
    public $timestamps=false;

    protected $table='area';

    protected $fillable=[
        'id','city_id','name'
    ];
    protected $hidden=[
        'updated_at','created_at'
    ];

    public function property(){
        return $this->hasMany('App\Property');
    }

}
