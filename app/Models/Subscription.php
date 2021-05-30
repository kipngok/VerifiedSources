<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table='subscriptions';
    protected $fillable=['user_id','package_id','date','expiry_date','status','amount'];

    public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }
    public function package(){
    	return $this->hasOne('App\Models\Package','id','package_id');
    }
}
