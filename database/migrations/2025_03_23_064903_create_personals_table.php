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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('profile')->nullable();
            $table->string('profile_hash')->nullable();
            $table->string('full_name');
            $table->string('title_headline');
            $table->string('personal_website')->nullable();
            $table->enum('education_type', ['HighSchool', 'AssociateDegree', 'BachelorDegree', 'MasterDegree', 'PhD'])->default('BachelorDegree');
            $table->enum('experience_type', ['EntryLevel', 'MidLevel', 'SeniorLevel', 'Manager', 'Director', 'Executive'])->default('EntryLevel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
