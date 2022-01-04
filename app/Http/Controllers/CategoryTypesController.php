<?php

namespace App\Http\Controllers;

use App\category_types;

use Illuminate\Http\Request;

class CategoryTypesController extends Controller
{
    public function shows(){
        
        $categories = category_types::show();

        return view('blog/post',compact('categories')); 
    } 
}
