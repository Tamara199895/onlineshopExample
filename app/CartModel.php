<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
  public $table="cart";
  
  public $timestamps=false;
    public function product(){
  	return $this->belongsTo("App\ProductModel","product_id");
  }
  //  public function photo(){
  // 	return $this->hasMany("App\photoModel","product_id","product_id");
  // }
}
