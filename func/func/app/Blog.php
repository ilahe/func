<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    public function author(){
    	return $this->belongsTo('App\Models\Author', 'author_id', 'id');
    }

    public function category(){
    	return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function tag() {
        return $this->belongsToMany('App\Models\Tag','blog_tag','blog_id','tag_id');
    }

    public function blog_tag() {
        return $this->hasMany('App\Models\Blog_Tag','blog_id','id');
    } 
}

