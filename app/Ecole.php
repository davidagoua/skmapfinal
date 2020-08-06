<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ecole extends Model
{
    public function mode() : string
    {
        switch ($this->type){
            case 1: return "UNIVERSITE PUBLIQUE";
                break;
            case 2: return "UNIVERSITE PRIVEE";
                break;
            case 3; return "GRANDE ECOLE";
                break;
            default: return "";
        }
    }


}
