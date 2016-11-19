<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerjodohansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perjodohans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ikhwan_id');
            $table->integer('akhawat_id');
            $table->boolean('nadzor')->default(0);
            $table->boolean('khitbah')->default(0);
            $table->boolean('nikah')->default(0);
            $table->boolean('batal')->default(0);
            $table->boolean('sukses')->default(0);
            $table->date('tanggal_nadzor');
            $table->date('tanggal_khitbah');
            $table->date('tanggal_nikah');
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
        Schema::dropIfExists('perjodohans');
    }
}
