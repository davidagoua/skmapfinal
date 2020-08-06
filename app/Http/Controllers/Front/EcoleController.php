<?php

namespace App\Http\Controllers\Front;

use App\Ecole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcoleController extends Controller
{

    public function index(Request $request)
    {
        if($request->input('q')){
            $ecoles = Ecole::where('nom', 'like', '%'.$request->input('q').'%')->paginate(10);
        }else{
            $ecoles= Ecole::paginate(10);
        }

        return view('front.ecole.index', [
            'ecoles'=>$ecoles
        ]);
    }

    public function show(Request $request, int $id)
    {
        $ecole = Ecole::find($id);
        return view('front.ecole.show',[
            'ecole'=>$ecole
        ]);
    }

    public function itineraie(int $id)
    {
        $ecole = Ecole::find($id)->first();

        return view('ecole.itineraie', [
            'ecole'=>$ecole
        ]);
    }
}
