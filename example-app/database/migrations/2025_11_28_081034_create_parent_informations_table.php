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
        Schema::create('parent_informations', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('contactInformation',255);
            $table->string('homeTown',255);
            $table->tinyInteger('sex')->comment('0:Nam,1:Nữ,2:bede');
            $table->foreignId('idStudent')
                ->constrained('students')
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
        Schema::dropIfExists('parent_informations');
    }
};
