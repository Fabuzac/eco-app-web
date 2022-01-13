<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ArticlesController extends Controller
{
    public function index() {

        return view('articles', [
            'articles' => $articles = Articles::latest()->orderBy('id', 'desc')->get(),              
        ]);        
    }

    public function show(Articles $articles) {
        // $articles = Articles::latest()->get();

        return view('article', [
            'article' => $articles,                    
        ]);
    }

    public function create() {
        //--
    }

    public function store() {
        
        $article = new Articles(request(['title', 'summary', 'body']));
        $article->user_id = auth()->id();
        $article->save();

        return redirect('/articles');
    }

    public function edit() {
        //--
    }

    public function update() {
        //--
    }

    public function destroy(Articles $articles) {

        $articles->delete();

        return redirect('/articles');

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

    public function oneArticle(Articles $articles) {
        // $articles = Articles::latest()->get();

        // For aside articles
        $article = Articles::latest()->orderBy('id', 'desc')->get();   
        
        return view('article', [
            'article' => $articles, // middle page, one article
            'articles' => $article //aside articles      
        ]);
    }

}
