<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::connection('mysql2') ->create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('description',300);
            $table->string('image',255);
            $table->integer('prix')->length(10)->unsigned();
            $table->integer('vendu')->length(10)->unsigned();
            $table->integer('id_categorie')->length(10)->unsigned();
            $table->foreign('id_categorie')->references('id')->on('categorie');
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
        Schema::dropIfExists('produits');
    }
}
