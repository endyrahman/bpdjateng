<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepalaRtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepala_rt', function (Blueprint $table) {
            $table->increments('id_krt');
            $table->string('nama_krt');
            $table->string('jen_kel_krt');
            $table->integer('umur_krt');
            $table->string('pend_krt');
            $table->string('lapus_krt');
            $table->string('sk_pkrt');
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
        Schema::dropIfExists('kepala_rt');
    }
}
