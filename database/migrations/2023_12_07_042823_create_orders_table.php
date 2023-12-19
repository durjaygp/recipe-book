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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->nullable();
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->nullable();
            $table->string('price')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->text('description')->nullable();
            $table->string('total_price')->nullable();
            $table->text('country')->nullable();
            $table->text('address')->nullable();
            $table->string('status')->nullable()->comment('0 = Active, 1 = Deactivate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
