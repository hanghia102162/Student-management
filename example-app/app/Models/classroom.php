<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class classroom extends Model
{
    /** @use HasFactory<\Database\Factories\ClassroomFactory> */
    use HasFactory;
    public function teachers (){
        return $this->belongsTo('teacher::class');
    }
    public function schedules(){
        return $this->hasMany(schedule::class);
    }
    public function students(){
        return $this->hasMany(student::class)
    }
    
}
