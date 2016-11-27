<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeadaanRumahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keadaan_rumah', function (Blueprint $table) {
            $table->increments('id_keadaan');
            $table->string('spbtt');
            $table->string('jen_atap_terluas');
            $table->string('jen_dinding_terluas');
            $table->string('jen_lantai');
            $table->string('sum_air_minum');
            $table->string('sum_pu');
            $table->string('bb_um');
            $table->string('fas_bab');
            $table->string('temp_pat'); 
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
        Schema::dropIfExists('keadaan_rumah');
    }
}
