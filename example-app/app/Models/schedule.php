<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;
    public function classrooms(){
        return $this->belongsTo(classroom::class);
    }
    public function students(){
        return $this->belongsTo(student::class);
    }
    public function teachers(){
        return $this->belongsTo(teacher::class);
    }

}
