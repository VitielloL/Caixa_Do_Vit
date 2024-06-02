<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pix', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeproduto')->nullable();
            $table->string('nomecliente')->nullable();
            $table->string('valor')->nullable();
            $table->string('nomeprodutoterceiro')->nullable();
            $table->string('nometerceiro')->nullable();
            $table->string('valorterceiro')->nullable();
            $table->string('valortotal')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pix');
    }
};
