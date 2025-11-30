<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher_subject extends Model
{
    //
    public function teachers (){
        return $this->hasMany(teacher::class);
    }
    public function subjects (){
        return $this->hasMany(subject::class);
    }
}
