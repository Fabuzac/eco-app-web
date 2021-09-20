<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class InnovatorsController extends Controller
{
    public function index() {
        
        $articles = Articles::latest()->get();

        return view('innovators', [
            'articles' => $articles,           
        ]);

    }
}
