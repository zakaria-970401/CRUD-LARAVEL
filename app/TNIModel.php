<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TNIModel extends Model
{
    protected $table = 'tbl_tni';

    public $timestamps  = false;

    protected $fillable = [
        'no_surat',
        'no_ktp',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pangkat',
        'jabatan',
        'nrp',
        'dinas',
        'alamat',
        'no_telp',
        'status',
        'foto',
    ];
}
