<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $fillable=['user_id','date','channel','amount'];

    public function user(){
    	return $this->hasOne('App\Models\User','id','user_id');
    }

}
