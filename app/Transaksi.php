<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = "transaksi";
 
    protected $fillable = ['nama_produk','userId', 'nohp','alamat','quantity','harga', 'status'];

    public function users(){
        return $this->belongsTo('App\User', 'userId');
    }

    public function getStatus(){
        if($this->status==0){
            return 'On Process';
        }
        else
        return 'Selesai';
    }
}
