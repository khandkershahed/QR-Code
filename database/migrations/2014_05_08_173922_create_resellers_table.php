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
        Schema::create('resellers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('email')->unique();
            $table->string('profile_image')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_name')->nullable();
            $table->string('phone')->nullable();
            $table->text('address_line_one')->nullable();
            $table->text('address_line_two')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('postal')->nullable();
            $table->rememberToken();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('github_id')->nullable();
            $table->string('apple_id')->nullable();
            $table->string('instagram_id')->nullable();
            $table->string('pinterest_id')->nullable();
            $table->string('linked_in_id')->nullable();
            $table->enum('status', ['active', 'inactive', 'suspended', 'disabled'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resellers');
    }
};
