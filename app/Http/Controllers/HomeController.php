<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class HomeController extends Controller
{

    public function home()
    {
        return view('/home', [
            'articles' => $articles = Articles::latest()->orderBy('id', 'desc')->get(),  
        ]); 
    }
    
    public function index()
    {
        return view('articles', [
            'articles' => $articles = Articles::latest()->orderBy('id', 'desc')->get(),  
        ]); 
    }

    public function show(Articles $articles) {
            
        return view('article', [
            'article' => $articles, // middle page, one article
            'articles' => $article = Articles::latest()->orderBy('id', 'desc')->get() //aside articles, several articles     
        ]);
    }
}
