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
        Schema::create('bar_codes', function (Blueprint $table) {
            $table->id();
            $table->string('barcode_pattern')->nullable();
            $table->string('barcode_color')->nullable();
            $table->text('product_name')->nullable();
            $table->string('product_id')->nullable();
            $table->double('product_price')->nullable();
            $table->string('per_page')->nullable();
            $table->string('barcode_width')->nullable();
            $table->string('barcode_height')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bar_codes');
    }
};
