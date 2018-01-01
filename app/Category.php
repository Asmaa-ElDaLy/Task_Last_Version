<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    Protected $fillable = ['type'];
    // relation one to many between category and product
    Public function items (){

      return $this -> hasMany(Product::class);
    }
}
