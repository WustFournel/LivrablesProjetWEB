<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeideesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2') ->create('likeidees', function (Blueprint $table) {
           $table->integer('id_users',11);
            $table->integer('id_idees')->length(10)->unsigned();
            $table->foreign('id_idees')->references('id')->on('idees');
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
        Schema::dropIfExists('likeidees');
    }
}
