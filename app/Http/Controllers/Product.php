<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;
use App\PhotoModel;
use App\CartModel;
use App\WishlistModel;


use Session;
 use Validator;
 use Redirect;

class Product extends Controller
{
    function  addproduct(){
    	return view("addproduct");
    }

    function add(Request $r){

        $validator = Validator::make($r->all(), [
           
            'name'=>'required',
            'price'=>'required|int',
            'count'=>'required|int',
            'description'=>'required',
            'photo'=>'required',
        ]);
         if ($validator->fails()) {
            return Redirect::to('/addProduct')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
$product=new ProductModel;
$product->name=$r->name;
$product->price=$r->price;
$product->count=$r->count;
$product->description=$r->description;
$product->user_id=Session::get("id");
$product->save();
if($r->hasfile('photo'))
         {

            foreach($r->file('photo') as $image)
            {   
                $name=time().$image->getClientOriginalName();
                $image->move(public_path().'/product_images/', $name);  
                $p=new PhotoModel;
                $p->url="$name";
                $p->product_id=$product->id;
                $p->save();
                    }
         }

            return Redirect::to('/shoper');
  }

}
function item($id){
    $product=ProductModel::where("id",$id)->first();
  
return view('mysingle')->with("product",  $product);
}
public function search(Request $r){
    $q=$r->text;
    $search=ProductModel::where('name','LIKE','%'.$q.'%')->get();
    return $search;
}
function delete (Request $r){
    ProductModel::where("id",$r->id)->delete();
}
public function edit(Request $r){
    ProductModel::where("id",$r->id)
    ->update(
        ['name' => $r->name,
        'price' => $r->price,
    'description' => $r->description,
    'count' => $r->count]
    );
    return Redirect::back();

}
// public function addcart(Request $r){
// $card=new ProductModel;
// $card->product_id=$r->name;
// $card->user=$r->price;
// $card->count=$r->count;
// $card->description=$r->description;
// $product->user_id=Session::get("id");
// $product->save();


 function del (Request $r){
    PhotoModel::where("id",$r->id)->delete();
}

function product(){
    
    $product=ProductModel::where("status","=","1")->get();
    return view('product')->with("product",$product);
}
public function wishlist(){
    
    $product=WishlistModel::where("user_id",Session::get("id"))->get();
    return view('wishlist')->with("product",$product);
}
 public function mycart(){
    
    $product=CartModel::where("user_id",Session::get("id"))->get();
    return view('mycart')->with("product",$product);
}

function single(){
    return view('single');
}


    function cart(Request $r){ 
            $cart=CartModel::where("user_id",Session::get("id"))->where("product_id",$r->product_id)->first();
if (empty($cart)) {

$cart=new CartModel;
 dd($cart);
$cart->count=1;
// $cart->price=$r->price;
// $sum->$cart['count']*$cart['price'];
$cart->product_id=$r->product_id;
$cart->user_id=Session::get("id");
$cart->save();
  }
else{

$cart->count = $cart->count + 1;
$cart->save();
   }

    }
      function addwishlist(Request $r){
       $wishlist=WishlistModel::where("user_id",Session::get("id"))->where("product_id",$r->product_id)->first();

if (empty($wishlist)) {
    $wishlist=new WishlistModel;
$wishlist->count=1;
$wishlist->product_id=$r->product_id;
$wishlist->user_id=Session::get("id");
$wishlist->save();
    }

    }

  }  

