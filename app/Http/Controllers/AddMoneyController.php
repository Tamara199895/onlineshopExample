<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
use App\OrderModel;
use App\OrderdetailsModel;
use App\CartModel;
use App\ProductModel;

class AddMoneyController extends Controller
{
	public function payWithStripe()
	{
		return view('paywithstripe');
	}
	public function postPaymentWithStripe(Request $request)
	{


		$validator = Validator::make($request->all(), [
			'card_no' => 'required',
			'ccExpiryMonth' => 'required',
			'ccExpiryYear' => 'required',
			'cvvNumber' => 'required',
 //'amount' => 'required',
		]);
		$input = $request->all();
		if ($validator->passes()) { 
			$input = array_except($input,array('_token'));
			$stripe = Stripe::make('sk_test_4wp04GGx1Y8UfcI0NinS1B2R00t3HIuRyU');
			try {
				$token = $stripe->tokens()->create([
					'card' => [
						'number' => $request->get('card_no'),
						'exp_month' => $request->get('ccExpiryMonth'),
						'exp_year' => $request->get('ccExpiryYear'),
						'cvc' => $request->get('cvvNumber'),
					],
				]);
 // $token = $stripe->tokens()->create([
 // 'card' => [
 // 'number' => '4242424242424242',
 // 'exp_month' => 10,
 // 'cvc' => 314,
 // 'exp_year' => 2020,
 // ],
 // ]);

				if (!isset($token['id'])) {
					return redirect()->route('addmoney.paywithstripe');
				}
				$cart=CartModel::where("user_id",Session::get("id"))->get();
				$sum=0;
				foreach ($cart as $p) {
					$sum+=$p->count*$p->product->price;
				}
				print $sum;
				$charge = $stripe->charges()->create([
					'card' => $token['id'],
					'currency' => 'USD',
					'amount' => $sum,
					'description' => 'Add in wallet',
				]);

				if($charge['status'] == 'succeeded') {
					$order=new OrderModel;
					$order->user_id=Session::get("id");
					$order->sum=$sum;
					$order->save();

					foreach ($cart as $c) {
						$orderdetail=new OrderdetailsModel;
						$orderdetail->order_id=$order->id;
						$orderdetail->product_id=$c->product_id;
						$orderdetail->price=$c->product->price;
						$orderdetail->count=$c->count;
						$orderdetail->save();
						$product = ProductModel::where("id",$c->product_id)->first();
						$product->count-= $c->count;
						$product->save();
					}
					CartModel::where("user_id",Session::get("id"))->delete();

					return Redirect::to('/user-orders');
				}
				else {
					\Session::flash('error','Money not add in wallet!!');
					return redirect()->route('addmoney.paywithstripe');
				}
			} catch (Exception $e) {
				\Session::flash('error',$e->getMessage());
				return redirect()->route('addmoney.paywithstripe');
			} catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
				\Session::flash('error',$e->getMessage());
				return redirect()->route('addmoney.paywithstripe');
			} catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
				\Session::flash('error',$e->getMessage());
				return redirect()->route('addmoney.paywithstripe');
			}
		}
		else{
			return redirect()->route('addmoney.paywithstripe')->withErrors($validator)->withInput();

		}
	}
}