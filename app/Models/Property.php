<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Property extends Model
{

    use Notifiable;
    protected $table='property';
    public $timestamps=false;


    protected $fillable=[
        'id',
        'swimming','basement','duplex' ,'condition','appendix','children_play_area','elevator','club',
        'cinema','sauna',
        'address','contract_type','country' ,'city','area','space','currency','price',
         'property_type','number_of_bedroom','number_of_bathroom','status',
        'Parking', 'year_of_construction','description','photo','user_id','remember_token'



    ];
    protected $hidden=[
        'updated_at','created_at'
    ];

    public function city(){
        return $this->belongsTo('App\City');
    }
}
