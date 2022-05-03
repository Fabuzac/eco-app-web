<?php
namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\User;

class ArticlesController extends Controller
{

    public function create(Articles $articles)
    {
        return view('articles.create', [
            'article' => $articles,            
            'articles' => $article = Articles::latest()->orderBy('id', 'desc')->get()
        ]);
    }

    public function store() 
    {        
        $article = new Articles(request(['title', 'summary', 'body']));
        $article->user_id = auth()->id();
        $article->save();

        return redirect()->route('articles');
    }

    public function edit(User $user, Articles $articles) 
    {
        return view('articles.edit', [
            'article' => $articles,
            'articles' => $article = Articles::latest()->orderBy('id', 'desc')->get(),  
            'user' => $user,
        ]);
    }

    public function destroy(Articles $articles) 
    {
        $articles->delete();
        $uri = route('articles');
        return redirect($uri);
    }
}
