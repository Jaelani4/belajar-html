<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penerbit')->insert([
            ['penerbit'=>'Graha Ilmu','alamat' =>'Ruko Jambu Sari 7A, Wedomartani','telepon' => '(0274) 882262','email' => '[esanan@grahailmu.co.id','id_user' => 1],
            ['penerbit'=>'Media Press','alamat' =>'Wonosari','telepon' => '2113','email' => 'wijaya@gmail.com', 'id_user' => 2],
            ['penerbit'=>'Jaya Kom','alamat' =>'Deresan Ctx Yogyakarta','telepon' => '21212','email' => 'mediakom@gmail.com', 'id_user' => 3]
            ]);
    }
}
