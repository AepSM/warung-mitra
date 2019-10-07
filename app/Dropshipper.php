<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dropshipper extends Model
{
    protected $fillable = [
        'customer_id', 'nama', 'alamat'
    ];
}
