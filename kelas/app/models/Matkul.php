<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul'; //utk menghubungkan ke tabel mahasiswa
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama', 'kelas', 'sks'
    ];
}
