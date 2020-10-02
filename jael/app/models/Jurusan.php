<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $tabel ='jurusan';
    protected $primaryKey = 'id';
    protected $fillable =['id', 'jurusan'];
}
