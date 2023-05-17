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
        Schema::create('shop_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->double('amount', 8, 2);
            $table->string('image', 100);
            $table->string('category', 100);
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_models');
    }
};
