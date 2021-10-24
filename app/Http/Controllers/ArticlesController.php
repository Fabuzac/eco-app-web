<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index() {
        
        $articles = Articles::latest()->orderBy('id', 'desc')->get();

        return view('articles', [
            'articles' => $articles,                    
        ]);
    }

    public function show(Articles $articles) {
        // $articles = Articles::latest()->get();

        return view('article', [
            'article' => $articles,                    
        ]);
    }

    public function create() {

    }

    public function store() {
        $articles = Articles::latest()->orderBy('id', 'desc')->get();

        return view('/home', [
            'articles' => $articles,                    
        ]);

    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }


    public function validateArticle() {
        return request()->validate([
            'body' => 'required|max:255',
        ]);
    }


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
