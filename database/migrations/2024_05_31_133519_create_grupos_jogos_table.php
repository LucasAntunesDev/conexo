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
        Schema::create('grupos_jogos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('grupo_id')->unsigned()->nullable(false); 
            $table->unsignedBigInteger('jogo_id')->unsigned()->nullable(false); 
            $table->unsignedBigInteger('palavra_id')->unsigned()->nullable(false); 

            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('jogo_id')->references('id')->on('jogos');
            $table->foreign('palavra_id')->references('id')->on('palavras');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos_jogos');
    }
};
