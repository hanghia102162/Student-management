<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scoreboard extends Model
{
    /** @use HasFactory<\Database\Factories\ScoreboardFactory> */
    use HasFactory;
    public function scoreboard_detail(){
        return $this->hasMany(scoreboard_details::class);
    }
}
