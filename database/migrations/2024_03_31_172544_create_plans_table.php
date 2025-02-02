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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_type_id')->nullable();
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('stripe_plan')->nullable();
            $table->string('slug')->unique();
            $table->json('descriptions')->nullable();
            $table->double('price')->nullable();
            $table->string('billing_cycle')->nullable();
            $table->text('payment_link')->nullable();
            $table->string('type')->nullable();
            $table->string('card_type')->nullable();
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
        Schema::dropIfExists('plans');
    }
};
