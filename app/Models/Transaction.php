<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table='transactions';
    protected $fillable=['name','date','amount'];

    public function payment(){
    	return $this->hasMany('App\Models\Payment','payment_id','id');
    }
}
