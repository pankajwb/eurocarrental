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
        Schema::create('usermetas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('user_role')->default('customer');
            $table->boolean('approved')->default(false);
            $table->text('country')->nullable();
            $table->text('address')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('ssn')->nullable();
            $table->string('driving_license')->nullable();
            $table->string('passport')->nullable();
            $table->string('company_registration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usermetas');
    }
};
