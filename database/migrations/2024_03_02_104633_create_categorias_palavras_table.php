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
        Schema::create('categorias_palavras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id')->unsigned()->nullable(false); 
            $table->unsignedBigInteger('palavra_id')->unsigned()->nullable(false); 
            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate('cascade');
            $table->foreign('palavra_id')->references('id')->on('palavras')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_palavras');
    }
};
