<?php

use Illuminate\Http\Request;
use App\modelorder;
use App\modelpurchase_order;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:api'], function () {

/*	Route::get('/piutang/{id}', function($id){
	return modelorder::all()->where('customer_id','=', $id);
});*/

Route::get('/piutang', function(){
	return modelorder::all()->where('customer_id','=', auth()->user()->id);
});

Route::get('/piutang/{ordernumber}', function($ordernumber){
	$order = modelorder::all()->where('customer_id','=', auth()->user()->id);
	$order = $order->where('order_number','=',$ordernumber); 
	return $order;
});
/*Route::get('/riwayat/{customer_id}', function($customer_id){
	$history = DB::table('order')->where('customer_id','=',$customer_id)->join('purchase_order','order.id','=','purchase_order.order_id')->select('purchase_order.*','order.order_number','order.customer_id')->get();
          
	return $history;
});*/

Route::get('/riwayat', function(){
	$history = DB::table('order')->where('customer_id','=', auth()->user()->id)->join('purchase_order','order.id','=','purchase_order.order_id')->select('purchase_order.*','order.order_number','order.customer_id')->get();
          
	return $history;
});

Route::get('/riwayat/{ordernumber}', function($ordernumber){
	$history = DB::table('order')->where('customer_id','=', auth()->user()->id)->join('purchase_order','order.id','=','purchase_order.order_id')->select('purchase_order.*','order.order_number','order.customer_id')->get();
    $history = $history->where('order_number','=',$ordernumber);      
	return $history;
});

});

Route::get('/supplier/{id}', function($id){


	$supp = DB::table('purchase_order')->where('supplier_id',$id)->selectRaw('supplier_id , avg(report_rating) AS report_rating, avg(flower_rating) AS flower_rating, avg(shipping_rating) as shipping_rating, count(complaint_notes) as complaint_notes, avg(flower_rating+report_rating+shipping_rating)/3 as summary')->groupby('supplier_id')->get();
	return $supp;
	/*$avgflow = modelpurchase_order::avg('flower_rating')->where('supplier_id',$id);
	$avgship = modelpurchase_order::avg('shipping_rating')->where('supplier_id',$id);
	$avgrep = modelpurchase_order::avg('report_rating')->where('supplier_id',$id);
	$countcomp = modelpurchase_order::count('complaint_notes')->where('supplier_id',$id);

	return $avgflow $avgship $avgrep, $countcomp;*/
});

Route::prefix('v1')->namespace('API')->group(function () {
	// Login
	Route::post('/login','AuthController@postLogin');
	// Register
	Route::post('/register','AuthController@postRegister');
	// Protected with APIToken Middleware
	Route::middleware('APIToken')->group(function () {
	  // Logout
	  Route::post('/logout','AuthController@postLogout');
	});
  });
