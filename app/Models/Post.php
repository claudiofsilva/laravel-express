<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = "post";

    //para adicionar informações em massa nesses campos
    protected $fillable = [
            'title',
            'content'
    ];

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag', 'posts_tags');
    }

}
