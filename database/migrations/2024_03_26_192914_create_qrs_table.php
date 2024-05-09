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
            $table->foreignId('reseller_id')->nullable()->constrained('resellers')->onDelete('cascade');
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
            $table->string('qr_scan_status')->nullable();
            $table->string('qr_png')->nullable();
            $table->string('qr_svg')->nullable();
            $table->string('qr_eps')->nullable();
            $table->string('qr_jpg')->nullable();
            $table->string('qr_pdf')->nullable();
            $table->text('qr_png_url')->nullable();
            $table->text('qr_svg_url')->nullable();
            $table->text('qr_eps_url')->nullable();
            $table->text('qr_jpg_url')->nullable();
            $table->text('qr_pdf_url')->nullable();
            $table->integer('scan_count')->nullable();
            $table->timestamp('scanned_at')->nullable();
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
