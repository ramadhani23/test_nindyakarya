<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('name');
            $table->string('email');
            $table->text('address');
            $table->integer('id_jabatan');
            $table->integer('jenis_kelamin');
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
        Schema::dropIfExists('ref_pegawai');
    }
}
