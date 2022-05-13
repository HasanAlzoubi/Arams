<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Property_Features extends Model
{
    use Notifiable;
      protected $table='property_features';
    public $timestamps=false;

    protected $fillable=[
        'property_id','swimming','basement','duplex','condition',
        'appendix','car_entrance','children_play_area',
        'elevator','club','cinema','sauna'
    ];


    protected $hidden = [
        'updated_at','created_at'
    ];

}
