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
            $table->unsignedBigInteger('disciplinas_id')->nullable(false);
            $table->unsignedBigInteger('grupos_id')->nullable(false);

            // $table->primary(['disciplinas_id', 'grupos_id']);
            $table->timestamps();

            // $table->foreign('disciplinas_id')->references('id')->on('disciplinas');
            // $table->foreign('grupos_id')->references('id')->on('grupos');

            $table->foreign('grupos_id')->references('id')->on('grupos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('disciplinas_id')->references('id')->on('disciplinas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('grupos_disciplinas');
    }
};
