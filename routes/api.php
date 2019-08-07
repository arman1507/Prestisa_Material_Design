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

Route::get('/piutang/{id}', function($id){
	return modelorder::all()->where('customer_id','=', $id);
});

Route::get('/piutang', function(){
	return modelorder::all();
});

Route::get('/riwayat/{customer_id}', function($customer_id){
	$history = DB::table('order')->where('customer_id','=',$customer_id)->join('purchase_order','order.id','=','purchase_order.order_id')->select('purchase_order.*','order.order_number','order.customer_id')->get();
          
	return $history;
});

Route::get('/riwayat', function(){
	$history = DB::table('order')->join('purchase_order','order.id','=','purchase_order.order_id')->select('purchase_order.*','order.order_number','order.customer_id')->get();
          
	return $history;
});