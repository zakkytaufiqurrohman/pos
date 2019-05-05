<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable=['id_category','nama_category'];
    protected $primaryKey='id_category';
}
