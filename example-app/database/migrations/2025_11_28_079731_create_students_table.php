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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String('name',255);
            $table->String('homeTown',255);
            $table->String('learningAbility',255);
            $table->String('contactInformation',255);
            $table->tinyInteger('sex')->comment('0:Nam,1:Nữ');
            $table->dateTime('birthDay');      
            $table->foreignId('idClass')
                ->constrained('classrooms')
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
        Schema::dropIfExists('students');
    }
};
