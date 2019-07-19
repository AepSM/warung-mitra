<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kontak extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'keterangan', 'link', 'gambar'
    ];
}
