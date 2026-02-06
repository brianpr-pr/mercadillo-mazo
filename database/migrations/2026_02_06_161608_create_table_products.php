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
        Schema::create('table_products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('fotos')->nullable();
            $table->enum('unidad_media', ['Kg', 'gr', 'L', 'mL']);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('table_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');
    }
};
