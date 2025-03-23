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
        Schema::create('webside_infos', function (Blueprint $table) {
            $table->id();
            $table->string('contact');
            $table->string('address');
            $table->foreignId('social_media_profile_id')->constrained('social_media_profiles','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('operating_hours'); //Monday to Friday 8:00am-5:30pm
            $table->string('email'); 
            $table->string('android_app_qr_download')->nullable();
            $table->string('ios_app_qr_download')->nullable();
            $table->string('copy_right_content'); //@2021 All rights reserved
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webside_infos');
    }
};
