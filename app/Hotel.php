<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = "hotel";
 
    protected $fillable = ['file','hotel','keterangan','alamat', 'notelp', 'harga', 'harga2'];
}
