<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
   public $table="product";
  
  public $timestamps=false;
  public function photo(){
return $this->hasMany("App\PhotoModel","product_id");

  }
}