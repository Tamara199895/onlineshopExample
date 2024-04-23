<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishlistModel extends Model
{
  public $table="wishlist";
  
  public $timestamps=false;
  public function product(){
  	return $this->hasMany("App\productModel","id","product_id");
  }
   public function photo(){
  	return $this->hasMany("App\photoModel","product_id","product_id");
  }

}
