<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    public function blog(){
    	return $this->belongsToMany('App\Blog', 'blog_tag', 'tag_id', 'blog_id');
    }
}

