<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use App\modelcrud;
use Datatables;

class CustomerController extends Controller
{
   public function index(){
   	return view('customers-ajax');
   } //
   public function json(){
   	$customers = DB::table('customer')->select('*');
   	return datatables()->of($customers)->make(true);
   }
}
