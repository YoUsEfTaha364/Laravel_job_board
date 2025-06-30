<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job 
{
    //public  $array=["titel"=>"software_engineer","salary"=>2000];

    public static function  all(){
        return[ ['title'=>'software_engineer','salary'=>'2000'],
               ['title'=>'php','salary'=>'2000']];
    }


    
}
