<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderSementara extends Model
{    
    protected $fillable = [
        'produk_id', 'qty', 'harga', 'kode'
    ];
    
    public function data_produk()
    {
        return $this->belongsTo('App\Produk', 'produk_id', 'id');
    }
}
