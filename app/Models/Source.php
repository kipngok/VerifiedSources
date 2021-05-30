<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;
    protected $table='sources';
    protected $fillable=['name','bio','status','title'];

    public function contact(){
    	return $this->haMany('App\Models\Contact','contact_id','id');
    }
    public function source_field(){
    	return $this->hasMany('App\Models\SourceField','source_field_id','id');
    }
}
