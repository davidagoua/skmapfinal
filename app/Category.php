<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public $timestamps = false;

    public function debouches()
    {
        return $this->hasMany(\App\Debouch::class, 'categorie_id');
    }

    public function filieres()
    {
        return $this->hasMany(\App\Filiere::class,'categorie_id');
    }
}
