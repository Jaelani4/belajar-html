<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            ['judul'=>'Simulasi Arduino','tahun_terbit'=>2018,'id_penerbit'=>2,'pengarang'=>'Abdul Kadir','jumlah_hal'=>400,'sampul'=>'merah','id_user'=>1],
            ['judul'=>'Mastering Yii','tahun_terbit'=>2017,'id_penerbit'=>5,'pengarang'=>'Badiyanto','jumlah_hal'=>250,'sampul'=>'hijau','id_user'=>1],
            ['judul'=>'Penatalaksanaan Diet Pada Pasien','tahun_terbit'=>2017,'id_penerbit'=>4,'pengarang'=>'Retno Wahyuningsih','jumlah_hal'=>300,'sampul'=>'kuning','id_user'=>1],
            ]);
    }
}
