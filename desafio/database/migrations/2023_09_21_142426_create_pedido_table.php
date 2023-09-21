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

        Schema::create('pedidos', function(Blueprint $table){
            $table->id();
            $table->string('email', 50);
            $table->string('nome', 50)->notnull();
            $table->string('celular', 255);
            $table->string('cpf', 255)->notnull();
            $table->string('cep', 9)->notnull();
            $table->string('logradouro', 100)->notnull();
            $table->string('numero', 10)->notnull();
            $table->string('complemento', 40)->nullable();
            $table->string('bairro', 30)->notnull();
            $table->string('cidade', 30);
            $table->string('estado', 2);
            $table->string('entrega', 10);
            $table->timestamps();
            $table->unique('id');
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
