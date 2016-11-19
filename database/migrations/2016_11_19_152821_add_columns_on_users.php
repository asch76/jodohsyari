<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 30);
            $table->string('nama_lengkap', 50);
            $table->string('nama_panggilan', 10);
            $table->string('nomor_identitas', 30);
            $table->string('alamat');
            $table->string('telepon', 30);
            $table->string('hp', 30);
            $table->string('fb', 100);
            $table->string('twitter', 100);
            $table->string('suku', 20);
            $table->boolean('status');
            $table->string('negara_asal', 30);
            $table->decimal('berat_badan', 4,1);
            $table->decimal('tinggi_badan', 4,1);
            $table->string('golongan_darah', 2);
            $table->string('pekerjaan', 30);
            $table->string('nama_ayah', 30);
            $table->string('nama_ibu', 30);
            $table->tinyInteger('anak_ke');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir',
                'nama_lengkap', 'nama_panggilan', 'nama_ibu', 'nama_ayah',
                'nomor_identitas', 'alamat', 'telepon', 'hp', 'twitter', 'fb',
                'suku', 'status', 'negara_asal', 'tinggi_badan', 'berat_badan',
                'golongan_darah', 'pekerjaan', 'anak_ke'
            ]);
        });
    }
}
