<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kode', 
        'customer_id', 
        'tanggal', 
        'nama', 
        'alamat', 
        'kecamatan', 
        'status_bayar', 
        'jenis_bayar',
        'status_kirim'
    ];

    public function data_customer()
    {
        return $this->belongsTo('App\User', 'customer_id', 'id');
    }

    public function data_order_detail()
    {
        return $this->hasMany('App\OrderDetail', 'kode', 'kode');
    }
}
