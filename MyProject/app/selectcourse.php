<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class selectcourse extends Model
{

    public function getdata()
    {
        return $this->hasMany('App\course');
        
        $name = App\selectcourse::find(1)->name;

        foreach($name as $getdata)
        {
            echo $name;
        }

    }



}
