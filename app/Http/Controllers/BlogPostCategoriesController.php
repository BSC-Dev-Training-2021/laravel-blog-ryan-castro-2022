<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog_post_categories;
use App\blog_post;
use App\blog_post_comments;



class BlogPostCategoriesController extends Controller
{
    public function show_categories($id){

        $comment = blog_post_comments::showcomments($id);

        $post_categories = blog_post_categories::show_categories($id);

        $article = blog_post::getarticle($id);

        return view('blog/article',compact('post_categories','article','comment')); 
    } 

    // public function categories($id){

    //     $categories = blog_post_categories::show_categories($id);


        
    // } 


}
