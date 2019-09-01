<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderSementara extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'produk_id', 'qty', 'harga'
    ];
    
    public function data_produk()
    {
        return $this->belongsTo('App\Produk', 'produk_id', 'id');
    }
}
