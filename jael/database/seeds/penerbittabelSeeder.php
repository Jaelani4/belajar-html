<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penerbittabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penerbit')->insert([
            ['penerbit'=>'jaelani','alamat' =>'janti','telepon'=>'081258480197','email' =>'jaellani4646@gmail.com','id_user'=>'700'],
            ['penerbit'=>'tri','alamat' =>'Sleman','telepon'=>'081258480197','email' =>'jaellani4646@gmail.com','id_user'=>'1'],
            ['penerbit'=>'bayu','alamat' =>'Kulon Progo','telepon'=>'081258480197','email' =>'jaellani4646@gmail.com','id_user'=>'2']
            ]);
    }
}
