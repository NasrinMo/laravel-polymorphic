<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    //Many to Many Relationship / a tag belongs to many posts (a post has many tags)
    public function posts(){
        return $this->morphedByMany('App\Models\Post', 'taggable');
    }

    //Many to Many Relationship / a tag belongs to many videos (a video has many tags)
    public function videos(){
        return $this->morphedByMany('App\Models\Video', 'taggable');
    }
}
