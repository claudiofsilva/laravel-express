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

}
