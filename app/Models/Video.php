<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    //One to Many Relationship / a Video has many comments  (a comment belongs to a video)
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    //Many to Many Relationship / a video has many tags  (a tag belongs to many videos)
    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
