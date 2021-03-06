<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function blog(){
    	return $this->hasMany('App\Blog', 'category_id', 'id');
    }
}
