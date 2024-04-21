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
        Schema::create('nfc_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('code')->nullable();
            $table->string('nfc_type')->nullable();
            $table->string('nfc_template')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('primary_text_color')->nullable();
            $table->string('secondary_color_text')->nullable();
            $table->string('button_color')->nullable();
            $table->string('form_color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfc_cards');
    }
};
