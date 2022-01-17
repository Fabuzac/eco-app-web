<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ArticlesController extends Controller
{
    public function index() {

        return view('articles.index', [
            'articles' => $articles = Articles::latest()->orderBy('id', 'desc')->get(),  
        ]);        
    }

    public function show(Articles $articles) {

        // For aside articles
        $article = Articles::latest()->orderBy('id', 'desc')->get();   
        
        return view('articles.show', [
            'article' => $articles, // middle page, one article
            'articles' => $article //aside articles, several articles     
        ]);
    }

    public function store() {
        
        $article = new Articles(request(['title', 'summary', 'body']));
        $article->user_id = auth()->id();
        $article->save();

        $uri = route('articles.store');

        return redirect($uri);
    }


    public function edit(User $user, Articles $articles) {

        return view('articles.edit', [
            'article' => $articles,
            'articles' => $article = Articles::latest()->orderBy('id', 'desc')->get(),  
            'user' => $user,
        ]);
    }

    public function update() {
        //--
    }

    public function destroy(Articles $articles) {

        $articles->delete();
        $uri = route('articles.index');
        return redirect($uri);

        //->with('success', "L'articles a bien ete supprime !");
        //->route('articles')
    }

    // public function validateArticle() {
    //     return request()->validate([
    //         'body' => 'required|max:255',
    //     ]);
    // }

    public function homeAsideArticles() {
        $articles = Articles::latest()->orderBy('id', 'desc')->get();

        return view('/home', [
            'articles' => $articles,                    
        ]);
    }
}
