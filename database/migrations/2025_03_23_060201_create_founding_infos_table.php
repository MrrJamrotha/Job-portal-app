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
        Schema::create('founding_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('origanization_type_id')->constrained('organization_types','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('team_size_id')->constrained('team_sizes','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('industry_type_id')->constrained('industry_types','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('year_of_establishment');
            $table->string('company_website');
            $table->text('company_vision');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('founding_infos');
    }
};
