<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Filiere extends Model
{
    public $timestamps = false;

    public function categorie()
    {
        return $this->belongsTo(\App\Category::class, 'categorie_id');
    }

    public function debouches()
    {
        return $this->belongsToMany(\App\Debouch::class,'debouche_filieres','filiere_id','debouche_id');
    }

    public function ecoles()
    {
        return $this->belongsToMany(\App\Ecole::class, 'ecole_filieres');
    }
}
