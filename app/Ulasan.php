<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ulasan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'produk_id', 'customer_id', 'star', 'komentar', 'status'
    ];
}
