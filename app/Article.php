<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(\App\Category::class, 'categorie_id');
    }

    public function comments()
    {
        return $this->hasMany(\App\Comment::class, 'article_id');
    }
}
