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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_1_id')->nullable();
            $table->unsignedBigInteger('grupo_2_id')->nullable();
            $table->unsignedBigInteger('grupo_3_id')->nullable();
            $table->unsignedBigInteger('grupo_4_id')->nullable();
            $table->unsignedBigInteger('grupo_1_palavras')->nullable();
            $table->unsignedBigInteger('grupo_2_palavras')->nullable();
            $table->unsignedBigInteger('grupo_3_palavras')->nullable();
            $table->unsignedBigInteger('grupo_4_palavras')->nullable();
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogo');
    }
};
