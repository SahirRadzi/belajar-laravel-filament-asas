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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->enum('gender', ["male","female"]);
            $table->string('ic')->unique();
            $table->string('position');
            $table->string('department');
            $table->boolean('is_active')->default(true);
            $table->text('address')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->text('info')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
