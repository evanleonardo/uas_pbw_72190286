<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MhsModel extends Model
{
    protected $table = 'mahasiswa286';

    protected $fillable = [
        'nim', 'nama', 'gender', 'jurusan', 'bidang_minat'
    ];
}
