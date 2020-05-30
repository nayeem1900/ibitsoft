<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAdmissioninfo extends Model
{


    public function images()
    {
        return $this->hasMany('App\StudentImage');

    }



}
