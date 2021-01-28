<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Fillable
    protected $fillable = [
        'title',
        'description',
        'slug',
        'path_img'
    ];

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
