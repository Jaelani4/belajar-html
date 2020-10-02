<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerbitTable extends Migration
{
    /**
     * menjalankan migration.
     * menciptakan penerbit tabel
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbit', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->string('penerbit',60);
            $table->string('alamat',60);
            $table->string('telepon',30);
            $table->string('email',30);
            $table->timestamps();
            $table->string('id_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerbit');
    }
}
