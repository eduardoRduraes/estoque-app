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
        Schema::create('produtos_table',function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->decimal('preco', 10,3);
            $table->decimal('saldo', 10,3);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('produtos_table');
    }
};
