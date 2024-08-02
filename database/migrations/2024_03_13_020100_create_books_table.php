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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date');
            $table->string('time');
            $table->string('name');
            $table->string('phone');
            $table->smallInteger('persons');
            $table->enum('status',['ACCEPTED','REJECTED','PENDING'])->default('PENDING');
            $table->foreignId('userId');
            $table->foreign('userId')->on('users')->references('id');
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
