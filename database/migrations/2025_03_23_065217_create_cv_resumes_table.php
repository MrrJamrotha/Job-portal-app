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
        Schema::create('cv_resumes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('personal_id')->constrained('personals','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('file_type',['Cv','Resume'])->default('Cv');
            $table->string('file_name');
            $table->string('url');
            $table->json('file_size');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_resumes');
    }
};
