<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cash', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeproduto')->nullable();
            $table->string('nomecliente')->nullable();
            $table->float('valor')->nullable();
            $table->string('nomeprodutoterceiro')->nullable();
            $table->string('nometerceiro')->nullable();
            $table->float('valorterceiro')->nullable();
            $table->float('valortotal')->nullable();
            $table->date('datacompra')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash');
    }
};
