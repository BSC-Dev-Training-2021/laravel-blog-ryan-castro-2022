<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog_post_categories;
use App\blog_post;
use App\blog_post_comments;
use App\category_types;



class BlogPostCategoriesController extends Controller
{
    public function show_categories($id){

        $comment = blog_post_comments::showcomments($id);

        $post_categories = blog_post_categories::show_categories($id);
        $categories = category_types::show();

        $article = blog_post::getarticle($id);

        $items = array();
            for ($a = 0; $a < count($categories); $a++){
                $postnum = blog_post_categories::getcategorybypost($categories[$a]->id);
                $items[$a] = count($postnum);
            }
        return view('blog/article',compact('post_categories','article','comment','categories','items')); 
    } 

    // public function categories($id){

    //     $categories = blog_post_categories::show_categories($id);


        
    // } 


}
