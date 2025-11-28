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
            Schema::create('classrooms', function (Blueprint $table) {
                $table->id();
                $table->string('codeClass',255);
                $table->string('currentName',255);
                $table->datetime('theYearBegins');
                $table->datetime('theYearEnd');
                $table->integer('numberOfStudents');
                $table->string('schoolYear',15);
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
        Schema::dropIfExists('classrooms');
    }
};
