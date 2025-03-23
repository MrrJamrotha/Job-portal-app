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
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('job_title');
            $table->foreignId('tag_id')->constrained('tags','id')->cascadeOnDelete();
            $table->foreignId('job_role_id')->constrained('job_roles','id')->cascadeOnDelete();
            $table->foreignId('location')->constrained('locations','id')->cascadeOnDelete();
            $table->decimal('min_salary')->default(0);
            $table->decimal('max_salary')->default(0);
            $table->enum('salary_type', ['Hourly', 'Monthly', 'Yearly', 'Fixed'])->default('Monthly');
            $table->enum('education_type', ['HighSchool', 'AssociateDegree', 'BachelorDegree', 'MasterDegree', 'PhD'])->default('BachelorDegree');
            $table->enum('experience_type', ['EntryLevel', 'MidLevel', 'SeniorLevel', 'Manager', 'Director', 'Executive'])->default('EntryLevel');
            $table->enum('job_type', ['FullTime', 'PartTime', 'Contract', 'Internship', 'Freelance', 'Temporary'])->default('FullTime');
            $table->integer('vacancies')->default(1);
            $table->date('expiration_date')->nullable();
            $table->enum('job_level', ['Junior', 'Mid', 'Senior', 'Manager', 'Director', 'Executive'])->default('Junior');
            $table->boolean('is_remote')->default(false);
            $table->json('job_benefits')->nullable();
            $table->longText('job_description');
            $table->enum('apply_on_type', ['Website', 'Email', 'Walk-in'])->default('Website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_jobs');
    }
};
