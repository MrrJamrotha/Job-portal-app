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
        Schema::create('privacy_and_policies', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // Example: "Privacy Policy", "Cookie Policy", etc.
            $table->longText('content'); // Stores the policy text
            $table->string('version')->unique(); // Example: "v1.0", "v2.0"
            $table->boolean('is_default')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privacy_and_policies');
    }
};
