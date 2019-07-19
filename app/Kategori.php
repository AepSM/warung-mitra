<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama'
    ];

    public function data_produk()
    {
        return $this->hasMany('App\Produk', 'kategori_id', 'id');
    }
}
