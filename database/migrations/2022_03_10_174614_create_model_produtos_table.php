<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->timestamps(); 
            $table->string('nome');
            $table-> double('price',10,2);
            $table->foreign('marca')->references('nome')->on('marcas')->onDelete('cascade')->onUptade('cascade');
            $table->foreign('categoria')->references('nome')->on('categoria')->onDelete('cascade')->onUptade('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
