<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id',5);
            $table->string('judul', 75);
            $table->char('tahun_terbit', 4);
            $table->integer('id_penerbit')->length(11);
            $table->string('pengarang', 100);
            $table->integer('jumlah_hal')->length(4);
            $table->string('sampul', 30);
            $table->timestamps(); 
            $table->integer('id_user')->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
