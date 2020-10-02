<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * memanggil kelas yang mennjalankan rekaman
     * tabel keta ke database.
     *
     * @return void
     */
    public function run()
    {
      
        $this->call(mahasiswasedeer::class);
    }
}
