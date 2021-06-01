<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table='packages';
    protected $fillable=['name','description','amount','time'];

    public function subscriptions(){
    	return $this->hasMany('App\Models\Subscription','package_id','id');

    }

}
