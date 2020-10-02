<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaJael extends Seeder
{/********************************
* menjalankan menambah rekaman
* ke tabel kota
* @return void
********************************/
public function run()
{
DB::table('kota')->insert([
['propinsi_id'=>1,'nama_kota' =>'Bantul'],
['propinsi_id'=>1,'nama_kota' =>'Sleman'],
['propinsi_id'=>1,'nama_kota' =>'Kulon Progo']
]);
}
}
