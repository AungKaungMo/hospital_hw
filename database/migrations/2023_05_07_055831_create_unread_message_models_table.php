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
        Schema::create('unread_message_models', function (Blueprint $table) {
            $table->id();
            $table->string('msg_details', 1024);
            $table->tinyInteger('vip')->default(0);
            $table->time('msg_time');
            $table->tinyInteger('del_flg')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unread_message_models');
    }
};
