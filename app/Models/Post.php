<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    //One to One Relationship(a post = a image)
    public function image()
    {
        //return $this->morphOne(related: Image::class, name: 'imageable' );
        return $this->morphOne('App\Models\Image', 'imageable');
    }


    //One to Many Relationship / a post has many comments (a comment belongs to a post)
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    

    //Many to Many Relationship / a post has many tags (a tag belongs to many posts)
    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
