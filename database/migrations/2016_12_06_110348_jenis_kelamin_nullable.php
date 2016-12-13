<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JenisKelaminNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('jenis_kelamin')->nullable()->change();
            $table->date('tanggal_lahir')->nullable()->change();
            $table->string('tempat_lahir')->nullable()->change();
            $table->string('nama_lengkap')->nullable()->change();
            $table->string('nama_panggilan')->nullable()->change();
            $table->string('jenis_identitas')->nullable()->change();
            $table->string('nomor_identitas')->nullable()->change();
            $table->string('alamat')->nullable()->change();
            $table->string('telepon')->nullable()->change();
            $table->string('hp')->nullable()->change();
            $table->string('fb')->nullable()->change();
            $table->string('twitter')->nullable()->change();
            $table->string('suku')->nullable()->change();
            $table->boolean('status')->nullable()->change();
            $table->string('negara_asal')->nullable()->change();
            $table->decimal('berat_badan')->nullable()->change();
            $table->decimal('tinggi_badan')->nullable()->change();
            $table->string('golongan_darah')->nullable()->change();
            $table->string('pekerjaan')->nullable()->change();
            $table->string('pendidikan_terakhir')->nullable()->change();
            $table->string('nama_ayah')->nullable()->change();
            $table->string('nama_ibu')->nullable()->change();
            $table->string('warna_kulit')->nullable()->change();
            $table->smallInteger('anak_ke')->nullable()->change();
            $table->string('karakter_positif')->nullable()->change();
            $table->string('karakter_negatif')->nullable()->change();
            $table->string('riwayat_penyakit')->nullable()->change();
            $table->string('hobby')->nullable()->change();
            $table->string('foto')->nullable()->change();
            $table->string('status_pernikahan')->nullable()->change();
            $table->text('profile')->nullable()->change();
            $table->smallInteger('jumlah_anak')->nullable()->change();
            $table->smallInteger('jumlah_saudara')->nullable()->change();
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
            //
        });
    }
}
