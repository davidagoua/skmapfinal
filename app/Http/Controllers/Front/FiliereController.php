<?php

namespace App\Http\Controllers\Front;

use App\Filiere;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiliereController extends Controller
{


    public function index(Request $request)
    {
        if($request->input('q')){
            $filieres = Filiere::where('nom','like', '%'.$request->input('q').'%')->paginate();
        }else{
            $filieres = Filiere::paginate(10);
        }

        return view('front.filiere.index', [
            'filieres'=>$filieres
        ]);
    }

    public function show(int $id)
    {
        $filiere = Filiere::find($id);

        return view('front.filiere.show', [
            'filiere'=>$filiere
        ]);
    }
}
