<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog_Tag extends Model
{
    protected $table = 'blog_tag';
    protected $fillable = ['blog_id', 'tag_id'];
    public $timestamps = false;

    public function tag(){
    	return $this->belongsToMany('App\Models\Tag', 'App\Blog', 'tag_id', 'blog_id');
    }

}




