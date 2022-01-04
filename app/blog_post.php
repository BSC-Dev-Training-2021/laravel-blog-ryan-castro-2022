<?php

namespace App;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class blog_post extends Model
{
    
    public static function show($page){
       return DB::table('blog_posts')
       ->join('users','users.id','=','blog_posts.created_by')
       ->select('blog_posts.*', 'users.name')
       ->skip($page*5)->take(5)
       ->orderBy('id', 'DESC')->get();
    }

    public static function getpostnumber(){
        return DB::table('blog_posts')
        ->join('users','users.id','=','blog_posts.created_by')
        ->select('blog_posts.*', 'users.name')->get();
     }

     public static function getarticle($id){
        return DB::table('blog_posts')
        ->join('users','users.id','=','blog_posts.created_by')
        ->select('blog_posts.*', 'users.name')
        ->where('blog_posts.id','=',$id)->get();
     }
}
