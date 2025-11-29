<?php

use App\Models\subject;
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
        Schema::create('teacher_subjects', function (Blueprint $table) {
            $table->foreignId('idTeacher')
                ->constrained('teachers')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('idSubject')
                ->constrained('subjects')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->primary(['idTeacher' , 'idSubject']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_subjects');
    }
};
