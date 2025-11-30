<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_subject extends Model
{
    /** @use HasFactory<\Database\Factories\StudentSubjectFactory> */
    use HasFactory;
    public function students(){
        return $this->hasMany(student::class);
    }
    public function subjects(){
        return $this->hasMany(subject::class);
    }
}
