<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTangselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tangsels', function (Blueprint $table) {
            $table->id();
            $table->string('ket');
            $table->string('jenis_property');
            $table->string('alamat');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('sertifikat');
            $table->biginteger('harga');
            $table->string('link_foto');
            $table->string('link_maps');
            $table->string('catatan');
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
        Schema::dropIfExists('tangsels');
    }
}
