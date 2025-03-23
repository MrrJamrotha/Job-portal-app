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
        Schema::create('team_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('size_category'); // -- Example: "Startup (1-10)"
            $table->text('description')->nullable();
            $table->integer('min_employees')->default(0);
            $table->integer('max_employees')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_sizes');
    }
};
