<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Debouch;
use App\Filiere;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.index');
    }

    public function search(Request $request, int $id)
    {
        $categorie = Category::find($id);
        $debouches = Debouch::where('categorie_id', $id)->take(6)->get();
        $filieres = Filiere::where('categorie_id', $id)->get();
        return view('front.home.search',[
            'debouches'=>$debouches,
            'filieres'=>$filieres,
            'categorie'=>$categorie
        ]);
    }
}
