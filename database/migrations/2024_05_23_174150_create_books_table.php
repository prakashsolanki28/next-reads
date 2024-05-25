<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('num_pages')->nullable();
            $table->string('editorial')->nullable();
            $table->string('isbn')->nullable();
            $table->string('year_edition')->nullable();
            $table->string('date_edition')->nullable();
            $table->string('writer')->nullable();
            $table->string('image')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->timestamps();
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
