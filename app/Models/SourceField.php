<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SourceField extends Model
{
    use HasFactory;
    protected $table='source_fields';
    protected $fillable=['source_id','field_id'];

    public function source(){
    	return $this->hasOne('App\Models\Source','id','source_id');
    }

    public function field(){
    	return $this->hasOne('App\Models\Field','id','field_id');
    }
}
