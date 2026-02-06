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
        Schema::create('table_fotos', function (Blueprint $table) {
            $table->id();
            $table->string('url'); //Mas que ruta yo veria mas usar un campo tipo blob para almacenar la imagen directamente en la base de datos, pero bueno, eso ya es cuestion de gustos
            $table->string('description')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('table_products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_fotos');
    }
};
