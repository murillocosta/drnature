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
        //
        Schema::create('pedido', function(Blueprint $table){
            $table ->id();
            $table->string('email');
            $table->string('nome', 50);
            $table->string('celular');
            $table->string('cpf');
            $table->string('cep', 9);
            $table->string('logradouro', 100);
            $table->integer('numero');
            $table->string('complemento', 40);
            $table->string('bairro', 30);
            $table->string('cidade', 30);
            $table->string('estado', 2);
            $table->string('entrega', 10);
            $table ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
