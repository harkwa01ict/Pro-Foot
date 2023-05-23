<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shop_models', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            Schema::enableForeignKeyConstraints();
        });
    }

    
    public function down(): void
    {
        Schema::table('shop_models', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
