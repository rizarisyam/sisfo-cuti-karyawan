<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string("tmpt_lahir");
            $table->date("tgl_lahir");
            $table->string("jenis_kelamin");
            $table->string('telp');
            $table->text('alamat');
            $table->enum('status_nikah', ['lajang', 'menikah']);
            $table->enum('status_karyawan', ['permanen', 'kontrak']);
            $table->string('pendidikan');
            $table->string('departemen');
            $table->string('jabatan');
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
        Schema::dropIfExists('karyawan');
    }
}
