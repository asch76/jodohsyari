<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriterias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('golongan_darah');
            $table->string('warna_kulit');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('status_pernikahan');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('pekerjaan');
            $table->string('pendidikan_terakhir');
            $table->string('suku');
            $table->string('negara_asal');
            $table->string('usia');
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
        Schema::dropIfExists('kriterias');
    }
}
