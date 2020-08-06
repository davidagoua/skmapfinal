<?php

namespace App\Http\Controllers\Front;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Request $req)
    {
        if($req->input('q')){
            $articles = Article::where('titre', 'like', '%'.$req->input('q').'%')
                ->paginate(10);
        }else{
            $articles = Article::paginate(10);
        }
        return view('front.blog.index', [
            'articles'=>$articles
        ]);
    }

    public function show()
    {

    }

    public function comment()
    {

    }
}
