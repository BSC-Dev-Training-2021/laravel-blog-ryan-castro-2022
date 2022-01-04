<?php

namespace App;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;


class blog_post_comments extends Model
{
    public static function showcomments($id){
        return DB::table('blog_post_comments')
        ->join('users','users.id','=','blog_post_comments.user_id')
        ->join('blog_posts','blog_posts.id','=','blog_post_comments.blog_post_id')
        ->select('blog_post_comments.comment', 'users.name')
        ->where('blog_post_comments.blog_post_id','=',$id)
        ->orderBy('blog_post_comments.id', 'DESC')
        ->get();
     }

     
}
