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
use Mail;


use Hash;

class User extends Controller
{

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
    
  function index1(){
   return view('welcome');
 }

 function login(){
  return view('login');

}
 function logout(){
$user=UserModel::where("id",$r->user_id)->first();
    $user->time=date("Y/m/d");
$user->save();
}
function check(Request $r){
        // dd ($r->input());

  $validator = Validator::make($r->all(), [
    
    'email'=>'required',
    'password'=>'required',
    'block'=>'0',
  ]);
  $user =UserModel::where("email",$r->email)->first();
  $validator->after(function ($validator) use ($r,$user) {
    if (empty($user)) {
      $validator->errors()->add('email', 'incorrect email');
    }
    elseif(!Hash::check($r->password,$user["password"])){
      $validator->errors()->add('password', 'incorrect password');

    } elseif($user['block']!=0){
      $validator->errors()->add('email', '  block');
      
    }
   elseif($user['activate']==0){
$validator->errors()->add('email', ' not correct this');
   }
  });
  if ($validator->fails()) {
    return Redirect::to('/login')
    ->withErrors($validator)
    ->withInput();
  }
  else {
   Session::put("id",$user["id"]);
  //    $u=UserModel::where("id",Session::get('id'))->first();
  //     $u->time="online";
  // $u->save();
}


    if($user['type']=="admin") {
   return Redirect::to("/admin");
  }
  
   return Redirect::to("/shoper");
 }
 
 //  Session::put("id",$user["id"]);
 //   
 //   return Redirect::to("/shoper");
 // }
 


public function signup(){
 return view('signup');
}
public function resetpassword(){
 return view('resetpassword');
}
public function profile(){
 
  $user=UserModel::where("id",Session::get("id"))->first();
  $myproduct=ProductModel::where("user_id",Session::get("id"))->where("status","=","1")->get();
  return view("shoper")->with("user",$user)->with("myproduct",  $myproduct);
}
public function registr(Request $request)
{
  $validator = Validator::make($request->all(), [
    'age' => 'required|int',
    'name'=>'required|max:18',
    'surname'=>'required|max:18',
    'email'=>'required|email',
    'password'=>'required|min:6|max:18',
    'password_confirm'=>'required|min:5|max:18',
  ]);
  if ($validator->fails()) {
    return Redirect::to('/signup')
    ->withErrors($validator)
    ->withInput();
  }
  else{
    $user=new UserModel;
    $user->name=$request->name;
    $user->surname=$request->surname;
    $user->age=$request->age;
    $user->email=$request->email; 
    $user->password=Hash::make($request->password);   
    $user->photo="";
    $user->save();
    $hash =md5($user->id.$request->email);
     $data = array('name'=>$request->name,"surname"=>$request->surname,"id"=>$user->id,"hash"=>$hash);
   
      Mail::send("mail", $data, function($message) use ($request) { 
         $message->to($request->email, 'Shop Admin')->subject
            ('email verification');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
    return  Redirect::to("login");

  }
}


public function index(){
  Session::flush();
  return view('index');
}
  
     // public function shoper(){
     //    return view('shoper');
    // }
   // public function single(){
   //      return view('single');

public function notification(){
 
  $not=NotificationModel::where("user_id",Session::get("id"))->get();

  return view("notification")->with("not",$not);
}

function reg($id,$hash){
  $user=UserModel::where("id",$id)->first();
  if ($user) { if ($hash==md5($id.$user->email)) {
   UserModel::where('id',$user->id)->update(["activate"=>1]);
   return Redirect::to("/login");
  }
    
   } 
// dd($id,$hash);
}

public function sendcode(Request $r){
$user=UserModel::where("email",$r->val)->first();
if (!$user) {
  return Redirect()->back()->with(['error'=>'this email not exits']);
}
$data=['name'=>$user['name'],'surname'=>$user['surname'],'code'=>$r->code];
Mail::send('password',$data,function($message)use($r){
  $message->to($r->val,'shop admin')->subject
  ('code for password');
  $message->from('xyz@gmail.com','Virat Gandhi');
});
return Redirect::to ("/resetpassword");
}

public function changepassword(){
  $user=UserModel::where("email",$r->mail)->first();
  $user->password=Hash::make($r->newpassword);
  $user->save();
}
}

