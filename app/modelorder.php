<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelorder extends Model
{
    protected $table='order';
    protected $primaryKey = 'id';
    //
	public function get_purchase(){
    	return $this->hasMany('App\Model\modelpurchase_order');
    }
}
