<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("nama_lengkap")->unique();
            $table->longText("alamat_ktp");
            $table->longText("alamat_lengkap_saat_ini");
            $table->string("kecamatan");
            $table->string("kabupaten");
            $table->string("propinsi");
            $table->string("no_telepon");
            $table->string("no_hp");
            $table->string("email")->unique();
            $table->string("kewarganegaraan");
            $table->string("tanggal_lahir");
            $table->string("tempat_lahir");
            $table->string("kota_lahir");
            $table->string("propinsi_lahir");
            $table->string("negara_lahir");
            $table->string("jenis_kelamin");
            $table->string("status_menikah");
            $table->string("agama");
            $table->string("status_pendaftaran");
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
        Schema::dropIfExists('pendaftarans');
    }
};
