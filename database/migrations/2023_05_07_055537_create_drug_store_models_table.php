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
        Schema::create('drug_store_models', function (Blueprint $table) {
            $table->id();
            $table->string('drug_name', 128);
            $table->string('drug_amount', 128);
            $table->integer('drug_stock');
            $table->integer('drug_price');
            $table->tinyInteger('del_flg')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drug_store_models');
    }
};
