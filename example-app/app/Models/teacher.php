<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
    public function classrooms (){
        return $this->hasMany(classroom::class);
    }
    public function schedules(){
        return $this->hasMany(schedule::class);
    }
    public function teacher_subjects(){
        return $this->belongsTo(teacher_subject::class);
    }
}
