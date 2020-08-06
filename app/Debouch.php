<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Debouch extends Model
{
    public $timestamps = false;

    public function categorie()
    {
        return $this->belongsTo('App\Category');
    }

    public function filieres()
    {
        return $this->belongsToMany(\App\Filiere::class, 'debouche_filieres','debouche_id','filiere_id');
    }
}
