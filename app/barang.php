<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //
    protected $fillable=['id_barang','id_supliyer','id_category','nama_barang','stok','harga'];
    protected $primaryKey='id_barang';

    public function category(){
       return  $this->belongsTo('App\categorie','id_category');
    }
}
