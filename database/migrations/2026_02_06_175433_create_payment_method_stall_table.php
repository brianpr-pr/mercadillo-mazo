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
        Schema::create('payment_method_stall', function (Blueprint $table) {
            // Its doesn't appear as foreign key on the database
            $table->foreignId('payment_method_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('stall_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['payment_method_id', 'stall_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_method_stall');
    }
};
