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
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('price')->nullable();
            $table->string('print_price')->nullable();
            $table->string('shipping_price')->nullable();
            $table->string('publish_date')->nullable();
            $table->string('pages')->nullable();
            $table->string('total_recipe')->nullable();
            $table->text('description')->nullable();
            $table->text('file')->nullable();
            $table->longText('body')->nullable();
            $table->text('image')->nullable();
            $table->string('status')->nullable();
            $table->string('is_featured')->nullable();
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
