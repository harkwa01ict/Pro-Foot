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
        Schema::table('tb_news_models', function (Blueprint $table) {
            //
            $table->enum('type', ['Breaking_News', 'Regular_News'])->default('Regular_News')->change();

        });
    }

    /**
     * Reverse the migrations.
     */

     

    public function down(): void
    {
        Schema::table('tb_news_models', function (Blueprint $table) {
            //
            $table->string('type')->change();

        });
    }
};
