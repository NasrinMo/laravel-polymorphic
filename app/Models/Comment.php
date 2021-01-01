<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    //commentable means any object that has comment attribute 
    public function commentable(){
        return $this->morphTo();
    }
}
