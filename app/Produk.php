<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 
        'kondisi_id',
        'kategori_id',
        'berat',
        'merek',
        'deskripsi',
        'stok',
        'harga',
        'gambar1',
        'gambar2',
        'gambar3',
        'terjual',
        'dilihat'
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
