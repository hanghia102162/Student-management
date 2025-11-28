<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scoreboard_details', function (Blueprint $table) {
            $table->id();
            $table->string('Name',255);
            $table->float('midtermScore');
            $table->float('finalGrade');
            $table->foreignId('idStudent')
                ->constrained('students')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('idSubject')
                ->constrained('subjects')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('idScoreboard')
                ->constrained('scoreboards')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scoreboard_details');
    }
};
