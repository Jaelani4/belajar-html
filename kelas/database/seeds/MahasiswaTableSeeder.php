<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            ['nim'=>18001,'nama' =>'Ana Rihana','alamat' =>'Solo','tgl_lahir' =>'2001-02-02','agama' =>'1','jenis_kelamin' =>'P','jurusan_id' =>4],
            ['nim'=>18002,'nama' =>'Bejo','alamat' =>'Yogyakarta','tgl_lahir' =>'2001-10-10','agama' =>'1','jenis_kelamin' =>'L','jurusan_id' =>3],
            ['nim'=>18003,'nama' =>'Bambang','alamat' =>'Bantul','tgl_lahir' =>'2001-02-26','agama' =>'2','jenis_kelamin' =>'L','jurusan_id' =>1],
            ['nim'=>18004,'nama' =>'Untung Suropati','alamat' =>'Bantul','tgl_lahir' =>'2001-02-02','agama' =>'1','jenis_kelamin' =>'L','jurusan_id' =>4],
            ['nim'=>18005,'nama' =>'Yuni Sara','alamat' =>'Bandung','tgl_lahir' =>'2001-03-02','agama' =>'1','jenis_kelamin' =>'P','jurusan_id' =>1]

            ]);
    }
}
