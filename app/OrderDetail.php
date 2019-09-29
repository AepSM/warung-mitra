<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_produk', 'kode', 'qty', 'harga'
    ];

    public function data_order()
    {
        return $this->belongsTo('App\User', 'kode_order', 'kode');
    }
}
