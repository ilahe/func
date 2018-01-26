<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $table = 'authors';

    public function blog(){
    	return $this->hasMany('App/Blog', 'author_id', 'id');
    }

    

}

