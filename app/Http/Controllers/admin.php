<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\ProductModel;
use Validator;
use Redirect;
use App\UserModel;
use App\NotificationModel;
use App\MessageModel;


use Hash;
class admin extends Controller
{
 
  function allusers(){
  	   $user=UserModel::all();
   return view('allusers')->with("user",$user);
 }
 
  function allproduct(){
    $myproduct=ProductModel::where("status","=","0")->get();
   return view('allproduct')->with("myproduct",  $myproduct);
     
   
 }
 
public function block(Request $r){
  // dd($r->id,$r->minute,);

   $user= UserModel::where("id",$r->id)->first();
   $t=($r->minute*60)+time();
    $user->block=$t;
    $user->save();
    return Redirect::back();



}

  function admin(){
  	 $product=ProductModel::where("status","=","1")->get();
   return view('admin')->with("product",$product);
 }

 public function hastatel (Request $r){

    $product=ProductModel::where("id",$r->id)->first();
    $product->status=1;
    $product->save();
    $not= new NotificationModel;
    $not->product_id=$r->id;
    $not->user_id=$r->user_id;
    $not->not="Admin accepted your product";
    $not->save();

}
 public function merjel (Request $r){
    ProductModel::where("id",$r->id)->delete();
    $not= new NotificationModel;
    $not->product_id=$r->id;
    $not->user_id=$r->user_id;
    $not->not="Admin deleted your product";
    $not->save();
}
public function namak(Request $r){
  $mes= new MessageModel;
  $mes->stacox_id=$r->stacox_id;
  $mes->message=$e=$r->message;
$mes->save();
}


}
