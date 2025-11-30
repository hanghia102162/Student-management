<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class scoreboard_details extends Model
{
    /** @use HasFactory<\Database\Factories\ScoreboardDetailsFactory> */
    use HasFactory;
    public function students(){
        return $this->belongsTo(student::class);
    }
    public function subjects(){
        return $this->hasMany(subject::class);
    }
    public function scoreboard(){
        return $this->belongsTo(scoreboard::class);
    }
 
}
