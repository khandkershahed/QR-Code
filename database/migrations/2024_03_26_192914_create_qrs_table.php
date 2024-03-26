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
        Schema::create('qrs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('code')->nullable();
            $table->string('qr_type')->nullable();
            $table->string('qr_template')->nullable();
            $table->string('qr_logo')->nullable();
            $table->string('qr_logo_size')->nullable();
            $table->string('qr_eye_ball')->nullable();
            $table->string('qr_eye_ball_color')->nullable();
            $table->string('qr_eye_frame')->nullable();
            $table->string('qr_eye_frame_color')->nullable();
            $table->string('qr_pattern')->nullable();
            $table->string('qr_pattern_color')->nullable();
            $table->string('qr_color_type')->nullable();
            $table->string('qr_solid_color')->nullable();
            $table->string('qr_gradient_color_type')->nullable();
            $table->string('qr_gradient_color_start')->nullable();
            $table->string('qr_gradient_color_end')->nullable();
            $table->string('qr_bg_type')->nullable();
            $table->string('qr_bg_color')->nullable();
            $table->string('qr_bg_image')->nullable();
            $table->string('qr_name')->nullable();
            $table->string('qr_image')->nullable();
            $table->text('qr_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qrs');
    }
};
