<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   use HasUuids;
      protected $primrykey="id";
   protected $keyType="string";
   public $incrementing=false;

       protected $table="tag";
    protected $fillable=["title"];
    protected $guarded=['id'];
    
    function posts(){
        return $this->belongsToMany(post::class);
    }
}
