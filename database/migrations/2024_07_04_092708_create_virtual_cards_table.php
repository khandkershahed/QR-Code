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
        Schema::create('virtual_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->nullable()->constrained('nfc_cards')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('admin_id')->nullable()->constrained('admins')->onDelete('cascade');
            $table->string('virtual_card_template')->nullable();
            $table->string('card_logo')->nullable();
            $table->string('card_bg_front')->nullable();
            $table->string('card_bg_back')->nullable();
            $table->string('card_name')->nullable();
            $table->string('card_designation')->nullable();
            $table->string('card_color')->nullable();
            $table->string('card_phone')->nullable();
            $table->string('card_email')->nullable();
            $table->string('card_address')->nullable();
            $table->string('card_font_color')->nullable();
            $table->string('card_font_style')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('virtual_cards');
    }
};
