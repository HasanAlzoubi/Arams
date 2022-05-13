<?php

namespace App\Traits;


Trait User_Trait
{
    public function File_name($photo){
        $file_extention=$photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extention;
        return $file_name;
    }

    public function File($Path,$photo,$image){
        $photo-> move($Path,$image);

    }


}
