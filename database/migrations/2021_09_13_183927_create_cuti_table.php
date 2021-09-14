<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate("cascade")
            ->onDelete("cascade");
            $table->date('mulai_cuti');
            $table->date("akhir_cuti");
            $table->string('jenis_cuti');
            $table->integer('jumlah_cuti');
            $table->integer('sisa_cuti');
            $table->text('keterangan');
            $table->enum('status', ['pending', 'rejected', 'approved']);
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
        Schema::dropIfExists('cuti');
    }
}
