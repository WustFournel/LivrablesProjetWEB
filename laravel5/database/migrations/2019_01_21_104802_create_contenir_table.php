<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2') ->create('contenir', function (Blueprint $table) {
            $table->integer('id_panier')->length(10)->unsigned();
            $table->foreign('id_panier')->references('id')->on('panier');
            $table->integer('id')->length(10)->unsigned();
            $table->foreign('id')->references('id')->on('produits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenir');
    }
}
