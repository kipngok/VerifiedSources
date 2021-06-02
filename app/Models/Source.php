<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;
    protected $table='sources';
    protected $fillable=['name', 'bio', 'status', 'title', 'profile_picture'];

    public function contacts(){
    	return $this->hasMany('App\Models\Contact','source_id','id');
    }
    public function sourceFields(){
    	return $this->hasMany('App\Models\SourceField','source_id','id');
    }
}
