<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_produk', 'kode', 'produk_id', 'qty', 'harga'
    ];

    public function data_order()
    {
        return $this->belongsTo('App\User', 'kode_order', 'kode');
    }

    public function data_produk()
    {
        return $this->belongsTo('App\Produk', 'produk_id', 'id');
    }
}
