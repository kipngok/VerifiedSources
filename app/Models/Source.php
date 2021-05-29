<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;



    public function contact(){
    	return $this->haMany('App\Models\Contact','contact_id','id');
    }
}
