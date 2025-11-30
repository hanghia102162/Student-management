<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    public function discipline(){
        return $this->belongsTo(reward::class);
    }
    public function parent_informations(){
        return $this->hasMany(parent_information::class);
    }
    public function scoreboard_detail(){
        return $this->belongsTo(scoreboard_details::class);
    }
    public function schedules (){
        return $this->belongsTo(schedule::class);
    }
    public function classrooms(){
        return $this->hasMany(classroom::class);
    }
    public function student_subjects(){
        return $this->belongsTo(student_subject::class);
    }
    public function rewards(){
        return $this-> hasMany(reward::class);
    }
}
