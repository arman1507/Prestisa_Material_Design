<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelpurchase_order extends Model
{
    protected $table='purchase_order';//
	public function get_order(){
    	return $this->belongsTo('App\Model\modelorder');
    }
}
