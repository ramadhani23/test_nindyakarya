<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransCutiPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_cuti_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pegawai',50);
            $table->date('tgl_awal_cuti',8);
            $table->date('tgl_akhir_cuti',8);
            $table->text('perihal_cuti');
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
        Schema::dropIfExists('trans_cuti_pegawai');
    }
}
