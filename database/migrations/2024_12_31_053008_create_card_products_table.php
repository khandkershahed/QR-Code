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
        Schema::create('card_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->mediumText('shipping_description')->nullable();
            $table->longText('manual')->nullable();
            $table->text('note')->nullable();
            $table->double('price')->nullable();
            $table->string('stripe_plan')->nullable();
            $table->json('plan_descriptions')->nullable();
            $table->string('image')->nullable();
            $table->string('billing_cycle')->nullable();
            $table->text('payment_link')->nullable();
            $table->string('type')->nullable();
            $table->string('currency')->default('USD')->nullable();
            $table->string('interval')->comment('Interval in days')->nullable();
            $table->integer('max_users')->nullable();
            $table->integer('qr')->nullable();
            $table->integer('nfc')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_products');
    }
};
