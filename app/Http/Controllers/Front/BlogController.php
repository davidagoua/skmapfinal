<?php

namespace App\Http\Controllers\Front;

use App\Article;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(Request $req)
    {
        if($req->input('q')){
            $articles = Article::where('titre', 'like', '%'.$req->input('q').'%')
                ->paginate(10);
        }elseif ($req->input('categorie')){
            $articles = Article::where('categorie_id', $req->input('categorie'))
                ->paginate(10);
        }
        else{
            $articles = Article::paginate(10);
        }
        return view('front.blog.index', [
            'articles'=>$articles,
            'articles_recent'=>Article::take(5)->get()
        ]);
    }

    public function show(Request $req, int $id)
    {
        $article = Article::find($id)->first();
        return view('front.blog.show', [
            'article'=>$article
        ]);
    }

    public function comment(Request $req, int $id)
    {
        $data = $req->validate([
            'email'=>'required',
            'nom'=>'required',
            'contenue'=>'required'
        ]);
        $comment = new Comment($data);
        $comment->article_id = $id;
        $comment->save();
        return back()->with('flash', 'Commentaire posté');
    }
}
