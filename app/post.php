<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    public static function show(){
        return static::all();
    }

    public static function getone($id){
        return static::where('id',$id)->get();
    }
}
