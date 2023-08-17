<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLHPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_h_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('kode_lhp');
            $table->date('tanggal');
            $table->string('uraian');
            $table->string('unit');
            $table->string('file');
            $table->string('status_verifikasi')->default('Sedang Dicek');
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
        Schema::dropIfExists('l_h_p_s');
    }
}
