<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\blog_post_comments;



class BlogPostCommentsController extends Controller
{
    public function storecomment(){

        $this->validate(request(),[
            'comment_txt' => 'required'
        ]);

        $comment  = new blog_post_comments;

        $comment->comment = request('comment_txt');
        $comment->user_id = request('user_id');
        $comment->blog_post_id = request('article_post_id');
        $comment->created_at = date("Y-m-d H:i:s");
        $comment->updated_at = date("Y-m-d H:i:s");
        
        $comment->save();
        
        return redirect()->to('article/'.request('article_post_id'));
    }
    

}
