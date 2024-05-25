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
        Schema::dropIfExists('items');
        Schema::create('items', function (Blueprint $table) {
        $table->id();
        $table->string("title")->nullable();
        $table->float('price')->nullable();
        $table->string('image')->nullable();
        $table->text('description')->nullable();
        $table->foreignId('category');
        // $table->string('category');
        $table->timestamps();
        $table->foreign('category')->on('categories')->references('id');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');

        //
    }
};
