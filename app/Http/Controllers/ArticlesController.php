<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index() {
        
        $articles = Articles::latest()->get();

        return view('community', [
            'articles' => $articles,           
           
        ]);

    }

    public function store() {

    }

    public function validateArticle() {
        return request()->validate([
            'body' => 'required|max:255',            
            
        ]);
    }

}
