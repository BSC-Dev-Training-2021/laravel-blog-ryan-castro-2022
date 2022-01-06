<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class blog_post_categories extends Model
{
    public static function show_categories($id){
        return DB::table('blog_post_categories')
        ->join('blog_posts','blog_post_categories.blog_post_id','=','blog_posts.id')
        ->join('category_types','blog_post_categories.category_id','=','category_types.id')
        ->select('category_types.name')
        ->where('blog_post_id','=',$id)
        ->get();
    }

    public static function categories($id){
        return DB::table('blog_post_categories')
        ->join('category_types','blog_post_categories.category_id','=','category_types.id')
        ->select('category_types.name','category_types.id')
        ->where('category_types.id','=',$id)
        ->get();
    }


}
