<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kondisi extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama'
    ];

    public function data_produi()
    {
        return $this->hasMany('App\Produk', 'kondisi_id', 'id');
    }
}
