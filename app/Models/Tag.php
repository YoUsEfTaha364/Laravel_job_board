<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
       protected $table="tag";
    protected $fillable=["title"];
    protected $guarded=['id'];
    
    function posts(){
        return $this->belongsToMany(post::class);
    }
}
