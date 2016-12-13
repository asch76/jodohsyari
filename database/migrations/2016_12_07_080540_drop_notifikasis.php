<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropNotifikasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('notifikasis');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('notifikasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('judul');
            $table->string('isi');
            $table->string('url');
            $table->boolean('read')->default(0);
            $table->timestamps();
        });
    }
}
