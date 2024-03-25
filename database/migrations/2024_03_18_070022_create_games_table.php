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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('chat_id');
            $table->tinyInteger('status')->default(0);
            $table->unsignedBigInteger('circle_id')->nullable();
            $table->bigInteger('month')->nullable();
            $table->tinyInteger('childs')->nullable();
            $table->unsignedBigInteger('money')->nullable();
            $table->unsignedBigInteger('purpose_money')->nullable();
            $table->tinyInteger('random')->default(0);
            $table->unsignedBigInteger('circle_card_id')->nullable()->comment("user qaysi kartaga kelib qolgani!");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
