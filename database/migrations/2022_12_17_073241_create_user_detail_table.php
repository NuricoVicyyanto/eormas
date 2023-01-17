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
        Schema::create('user_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('email');
            $table->string('nama_organisasi');
            $table->string('jenis_organisasi');
            $table->string('bidang_kegiatan');
            $table->string('alamat');
            $table->string('bukti_alamat');
            $table->string('no_hp');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('nama_notaris');
            $table->string('no_notaris');
            $table->string('sk_terdaftar');
            $table->string('sk_pengurus');

            $table->string('nama_ketua');
            $table->string('ttl_ketua');
            $table->string('no_ketua');
            $table->string('identitas_ketua');

            $table->string('nama_sekretaris');
            $table->string('ttl_sekretaris');
            $table->string('no_sekretaris');
            $table->string('identitas_sekretaris');

            $table->string('nama_bendahara');
            $table->string('ttl_bendahara');
            $table->string('no_bendahara');
            $table->string('identitas_bendahara');

            $table->string('status');

            $table->foreign('user_id')->references('user_id')->on('tb_user')->onDelete('cascade');
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
        Schema::dropIfExists('user_detail');
    }
};
