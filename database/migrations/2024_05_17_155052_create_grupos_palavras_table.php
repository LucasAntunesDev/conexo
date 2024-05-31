<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('grupos_palavras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_id')->unsigned()->nullable(false); 
            $table->unsignedBigInteger('palavra_id')->unsigned()->nullable(false); 
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('palavra_id')->references('id')->on('palavras')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('grupos_palavras');
    }
};
