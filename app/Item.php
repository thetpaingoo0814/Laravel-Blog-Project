<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
	use SoftDeletes;
    protected $fillable = ['codeno','name','price','discount','description','brand_id','subcategroy_id'];
}
