<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supliyer extends Model
{
    protected $fillable=['id_supliyer','nama_supliyer','alamat','no_tlp'];
    protected $primaryKey ='id_supliyer';
}
