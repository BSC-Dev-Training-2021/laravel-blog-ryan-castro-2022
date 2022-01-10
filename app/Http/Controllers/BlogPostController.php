<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\blog_post;
use App\category_types;
use App\blog_post_categories;

class BlogPostController extends Controller
{
    public function shows($all,$page){

        if ($all == "all"){
            $post = blog_post::show($all,$page);
        }
        else {
            $post = blog_post::showwithcategory($all,$page);
        }

        if (count($post) == 0){

            return redirect('create');
         }
            else
            {
  
            $countpost = blog_post::getpostnumber();

            $getpage = $page+1;
            $pagenow = $page+1;
            $backpage = $page-1;
            if ($backpage < 1) {
            $backpage = 0;
            }
        
            $total = count($countpost) / 5;
        
            if ($total > 0) {
                $totalpage = ceil($total) - 1;
            }
        
            if (ceil($total) <= $getpage) {
                $getpage = $totalpage;
            }

        $categories = category_types::show();

        $items = array();
        for ($a = 0; $a < count($categories); $a++){
            $postnum = blog_post_categories::getcategorybypost($categories[$a]->id);
            $items[$a] = count($postnum);
        }

        return view('blog/index',compact('post','backpage','totalpage','getpage','pagenow','categories','items','all')); 
        }
    } 

 

    public function store(){

        $this->validate(request(),[
            'categories' => 'required',
            'blog_title_txt' => 'required',
            'blog_description_txt' => 'required',
            'blog_content_txt' => 'required'
        ]);

        $post  = new blog_post;

        $post->title = request('blog_title_txt');
        $post->descriptions = request('blog_description_txt');
        $post->contents = request('blog_content_txt');
        $post->created_by = request('my_info');
        $post->created_at = date("Y-m-d H:i:s");
        $post->updated_at = date("Y-m-d H:i:s");

        $post->save();

        $getid = $post->id;
        $cat = request('categories');
        $getcat = count(request('categories'));

        for ($a = 0; $a < $getcat; $a++){
            DB::table('blog_post_categories')->insert(
                [
                'blog_post_id' => $getid, 
                'category_id' => $cat[$a], 
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                ]
            );
        }

        return redirect('post/all/0');
    }

}
