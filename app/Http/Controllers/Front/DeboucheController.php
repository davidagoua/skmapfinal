<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Debouch as Debouche;
use App\Debouch ;

class DeboucheController extends Controller
{
    public function index(Request $request)
    {
        if($request->input('q')){
            $debouches = Debouche::where('nom', 'like', '%'.$request->input('q').'%')->paginate(10);
        }elseif ($request->input('categorie')){
            $debouches = Category::find($request->input('categorie'))->debouches()->paginate(10);
        }
        else{
            $debouches = Debouche::paginate(10);
        }
        return view('front.debouche.index', compact('debouches'));
    }

    public function show(int $deb)
    {
        $deb  = Debouche::where('id',$deb)->first();

        return view('front.debouche.show', compact('deb'));
    }
}
