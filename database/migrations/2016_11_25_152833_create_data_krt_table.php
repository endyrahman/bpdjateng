<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKrtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_krt', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        
        Schema::table('data_krt', function (Blueprint $table) {
            $table->integer('id_krt')->unsigned();
            $table->foreign('id_krt')->references('id_krt')->on('kepala_rt');
            $table->integer('id_alamat')->unsigned();
            $table->foreign('id_alamat')->references('id_alamat')->on('alamat_krt');
            $table->integer('id_keadaan')->unsigned();
            $table->foreign('id_keadaan')->references('id_keadaan')->on('keadaan_rumah');
        });
    

    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_krt');
    }
}
