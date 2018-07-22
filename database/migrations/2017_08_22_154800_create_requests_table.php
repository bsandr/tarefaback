<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->integer('Numero');
            $table->integer('idCliente');
            $table->integer('idProduto');
            $table->integer('Quantidade');
            $table->timestamps();
        });

        Schema:: table('requests', function(Blueprint $table) {
            $table->foreign('idCliente')->references('id')->on('clients');
            $table->foreign('idProduto')->references('id')->on('products');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
