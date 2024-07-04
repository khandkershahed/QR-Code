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
        Schema::create('nfc_scans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nfc_id')->nullable()->constrained('nfc_cards')->onDelete('cascade');
            $table->string('nfc_code')->nullable();
            $table->string('ip_address', 100)->nullable();
            $table->string('user_device', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfc_scans');
    }
};
