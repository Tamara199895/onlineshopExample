<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('',"User@index1");
Route::get("/barev","User@home");
Route::get("/signup","User@signup");

Route::post("/registr","User@registr");

Route::get("/login","User@login");

Route::post("/loginuser","User@check");



Route::get("/addProduct","Product@addproduct")->middleware("islogin");
Route::post("/add","Product@add")->middleware("islogin");
Route::get("/product","Product@product")->middleware("islogin");
Route::get("/product/item/{id}","Product@item")->middleware("islogin");
Route::get("/single","Product@single");
Route::post("/search","Product@search")->middleware("islogin");

// Route::get("/about","User@about");
// Route::get("/concat","User@concat");
// Route::get("/icon","User@icon");
Route::get("/index","User@index");
Route::get("/notification","User@notification")->middleware("islogin");
Route::get("/message","User@message")->middleware("islogin");

Route::get("shoper","User@profile")->middleware("islogin");
Route::post("delete","Product@delete")->middleware("islogin");
Route::post("edit","Product@edit")->middleware("islogin");
Route::post("del","Product@del")->middleware("islogin");
Route::post("hastatel","Admin@hastatel")->middleware("islogin")->middleware("admin");
Route::post("merjel","Admin@merjel")->middleware("islogin")->middleware("admin");
Route::post("cart","Product@cart")->middleware("islogin");
Route::post("addwishlist","Product@addwishlist");
Route::post("logout","User@logout");

Route::get("/wishlist","Product@wishlist");
Route::get("/mycart","Product@mycart");

Route::get("/admin","Admin@admin")->middleware("admin");
Route::get("/allusers","Admin@allusers")->middleware("admin");
Route::get("/allproduct","Admin@allproduct")->middleware("admin");
Route::post("/block","Admin@block")->middleware("admin");
Route::post("/namak","Admin@namak")->middleware("admin");
Route::get("resetpassword","User@resetpassword");
Route::get("email","User@sendcode");
Route::get("changepassword","User@changepassword");

Route::get("/user/confirm/{id}/{hash}","user@reg");

Route::get("user-order","Order@user-order");


Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe','uses' => 'AddMoneyController@payWithStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));




// Route::get("/typography","User@typography");
// Route::get("/welcome","User@welcome");



