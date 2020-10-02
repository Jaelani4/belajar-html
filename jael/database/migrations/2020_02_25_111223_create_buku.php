<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id',4);
            $table->varchar('judul',75);
            $table->char('tahun_terbit',4);
            $table->int('id_penerbit',11);
            $table->varchar('pengarang',100);
            $table->int('jumlah_hal',4);
            $table->varcahr('sampul',30);
            $table->timestamps();
            $table->int('id_user');
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
