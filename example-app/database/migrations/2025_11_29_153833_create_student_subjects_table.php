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
        Schema::create('student_subjects', function (Blueprint $table) {
            $table->foreignId('idStudent')
                    ->constrained('students')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->foreignId('idSubject')
                    ->constrained('subjects')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->primary(['idStudent','idSubject']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_subjects');
    }
};
