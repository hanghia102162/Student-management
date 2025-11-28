<?php

use App\Models\student;
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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('dayOfWeek')->comment('0:Thứ 2,1:Thứ 3,2:Thứ 4,3:Thứ 5,4:Thứ 6,5:Thứ 7,6:Chủ nhật');
            $table->string('semester',255);
            $table->dateTime('year');
            $table->string('Room',255);
            $table->dateTime('start_year');
            $table->datetime('end_year');
            $table->foreignId('idClass')
                  ->constrained('classrooms')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->foreignId('idSubject')
                  ->constrained('students')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->foreignId('idTeacher')
                  ->constrained('teachers')
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
        Schema::dropIfExists('schedules');
    }
};
