<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class kota extends Model
    {
        protected $table = 'dosen';
        protected $primaryKey = 'nip';
        static $rules = [
            'nip' => 'required',
            'nama' => 'required',
        ];
        protected $perPage = 20;
        protected $fillable = ['nip','nama','tgl_lahir','alamat','jk','golongan','email'];
    }
    

