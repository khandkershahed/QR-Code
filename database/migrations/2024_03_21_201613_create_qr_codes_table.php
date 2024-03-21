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
        Schema::create('qr_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->unsignedBigInteger('template_id')->nullable();
            $table->string('logo')->nullable();
            $table->string('eye_ball_color')->nullable();
            $table->unsignedBigInteger('eye_ball_id')->nullable();
            $table->string('eye_frame_color')->nullable();
            $table->unsignedBigInteger('eye_frame_id')->nullable();
            $table->unsignedBigInteger('pattern_id')->nullable();
            $table->string('pattern_color_type')->nullable();
            $table->string('pattern_color_solid')->nullable();
            $table->string('pattern_color_gradient_type')->nullable();
            $table->string('pattern_color_gradient_start')->nullable();
            $table->string('pattern_color_gradient_end')->nullable();
            $table->string('background_type')->nullable();
            $table->string('background_color')->nullable();
            $table->string('background_image')->nullable();
            $table->unsignedBigInteger('frame_id')->nullable();
            $table->string('frame_color')->nullable();
            $table->string('code_image')->nullable();
            $table->text('code_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_codes');
    }
};
