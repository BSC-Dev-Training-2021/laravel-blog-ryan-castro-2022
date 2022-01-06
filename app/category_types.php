<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class category_types extends Model
{
    public static function show(){
        return DB::table('category_types')->orderBy('id', 'DESC')->get();
     }

     public static function getone($id){
        return DB::table('category_types')->find($id);
     }
}

