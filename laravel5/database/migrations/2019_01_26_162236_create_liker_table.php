<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::connection('mysql2') ->create('liker', function (Blueprint $table) {
            $table->integer('id_image')->length(10)->unsigned(); 
            $table->integer('id_users')->length(10)->unsigned();
            $table->timestamps();
        }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
