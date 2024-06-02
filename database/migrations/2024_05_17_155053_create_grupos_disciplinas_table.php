<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('grupos_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disciplina_id')->nullable(false);
            $table->unsignedBigInteger('grupo_id')->nullable(false);

            // $table->primary(['disciplinas_id', 'grupo_id']);
            $table->timestamps();

            // $table->foreign('disciplinas_id')->references('id')->on('disciplinas');
            // $table->foreign('grupo_id')->references('id')->on('grupos');

            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupos_disciplinas');
    }
};
