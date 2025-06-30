<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\factories\HasFactory;

class Post extends Model
{
   use HasFactory;// create fake data in database
   use HasUuids;
   protected $primrykey="id";
   protected $keyType="string";
   public $incrementing=false;
    protected $table="post";
    protected $fillable=["title","body","published","author"];
    protected $guarded=['id'];

     function comments(){
        return $this->hasMany(comment::class);
     }

     function tags(){
     return  $this->belongsToMany(Tag::class);
     }
}
