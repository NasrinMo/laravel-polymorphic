<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    //imageable means any object that has image attribute 
    public function imageable()
    {
        return $this->morphTo();
    }
}
