<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;
    public function scoreboard_detail(){
        return $this->belongsTo(scoreboard_details::class);
    }
    public function teacher_subjects(){
        return $this->belongsTo(teacher_subject::class);
    }
    public function student_subjects(){
        return $this->belongsTo(student_subject::class);
    }
}
