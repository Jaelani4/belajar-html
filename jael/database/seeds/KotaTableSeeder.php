<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaTableSeeder extends Seeder
{
    /**
     * menjalankan menambah rekamana
     * ke tabel kota
     * @return void
     */
    public function run()
    {
        DB::table('kota')->insert([
            ['propinsi_id'=>1,'nama_kota' =>'bantul'],
            ['propinsi_id'=>1,'nama_kota' =>'seleman'],
            ['propinsi_id'=>1,'nama_kota' =>'kulon progo'],

        ]);
    }
}
