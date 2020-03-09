<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'kategori_id',
        'deskripsi',
        'stok',
        'harga',
        'gambar1',
        'video_id'
    ];

    public function data_kondisi()
    {
        return $this->belongsTo('App\Kondisi', 'kondisi_id', 'id');
    }
    public function data_kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id', 'id');
    }
}
