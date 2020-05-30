<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibit extends Model
{
    public function department(){

        return $this->hasMany(Department::class);

    }
}
