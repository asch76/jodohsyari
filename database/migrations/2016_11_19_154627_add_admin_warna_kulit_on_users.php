<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminWarnaKulitOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('warna_kulit', 20);
            $table->string('pendidikan_terakhir', 50);
            $table->string('karakter_positif');
            $table->string('karakter_negatif');
            $table->string('riwayat_penyakit');
            $table->string('hobby');
            $table->boolean('admin')->default(0);
            $table->boolean('verified')->default(0);
            $table->boolean('nadzor')->default(0);
            $table->boolean('khitbah')->default(0);
            $table->boolean('nikah')->default(0);
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
                'warna_kulit', 'admin', 'pendidikan_terakhir',
                'karakter_positif', 'karakter_negatif',
                'riwayat_penyakit', 'hobby', 'verified', 'nadzor', 'khitbah', 'nikah'
            ]);
        });
    }
}
