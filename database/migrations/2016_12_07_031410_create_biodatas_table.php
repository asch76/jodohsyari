<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('foto');
            $table->string('api_token', 64);
            $table->string('role', 20)->default('member');
            $table->boolean('active')->default(0);
            $table->boolean('verified')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsiged();
            $table->boolean('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 20);
            $table->string('nama_lengkap', 30);
            $table->string('nama_panggilan', 20);
            $table->string('jenis_identitas', 10);
            $table->string('nomor_identitas', 50);
            $table->string('suku', 20);
            $table->string('negara_asal', 20);
            $table->string('pendidikan_terakhir', 50);
            $table->string('pekerjaan', 20);
            $table->string('status_pernikahan', 15);
            $table->smallInteger('jumlah_anak');
            $table->boolean('jumlah_istri');
            $table->timestamps();
        });

        // Schema::table('users', function (Blueprint $table) {
        //     $table->dropColumn([
        //         'nama_lengkap',
        //         'nama_panggilan',
        //         'jenis_kelamin',
        //         'tempat_lahir',
        //         'tanggal_lahir',
        //         'negara_asal',
        //         'jenis_identitas',
        //         'nomor_identitas',
        //         'suku',
        //         'alamat',
        //         'telepon',
        //         'hp',
        //         'fb',
        //         'twitter',
        //         'profile',
        //         'karakter_negatif',
        //         'karakter_positif',
        //         'hobby',
        //         'tinggi_badan',
        //         'berat_badan',
        //         'golongan_darah',
        //         'warna_kulit',
        //         'pekerjaan',
        //         'pendidikan_terakhir',
        //         'status_pernikahan',
        //         'jumlah_anak',
        //         'nama_ayah',
        //         'nama_ibu',
                    // 'anak_ke',
        //         'jumlah_saudara'
        //     ]);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodatas');
    }
}
