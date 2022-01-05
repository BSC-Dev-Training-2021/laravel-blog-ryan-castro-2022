<?php

namespace App\Http\Controllers;

use App\category_types;
use App\blog_post_categories;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CategoryTypesController extends Controller
{
    public function shows(){
        
        $categories = category_types::show();

        return view('blog/post',compact('categories')); 
    } 

    public function category(){
        
        $categories = category_types::show();

        for($a=0; $a < count($categories); $a++){

            
            $count = blog_post_categories::categories($categories[$a]->id);
            // $categorycount[$a]->number_post = count($count);
            $categorycount[$a]['total'] = count($count);
        }

        return view('blog/category',compact('categories','categorycount')); 
    } 

    public function storecategory(){


        $newcategory  = new category_types;

        $newcategory->name = request('category_txt');
        $newcategory->created_at = date("Y-m-d H:i:s");
        $newcategory->updated_at = date("Y-m-d H:i:s");
        
        $newcategory->save();
        
        return redirect('category');
    }

    public function deletecategory($id){
        
        category_types::destroy($id);

        return redirect('category');
    }

    public function destroy($id){


        DB::table('category_types')->where('id', $id)->delete();

        return redirect('category');
    }
}
