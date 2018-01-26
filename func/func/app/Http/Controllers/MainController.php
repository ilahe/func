<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Category;
use App\Blog;
use App\Models\Blog_Tag;
use App\Models\Tag;

class MainController extends Controller
{
    public function get_blog(){
    	$blogs = Blog::all();
    	//$blog_tag = Blog_Tag::all();
    	//$tag = Tag::all();
    	//dd($blog_tag);
    	//dd($tag);
    	return view('frontend.blog', compact('blogs'));
    }

    public function get_blog_details($id){
    	$find = Blog::where('id', $id)->get()->first();
    	//dd($find);
    	return view('frontend.blog-details', compact('find','id'));
    }
}
