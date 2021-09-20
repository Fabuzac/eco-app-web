<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class CelestialController extends Controller
{
    public function index() {
        
        $articles = Articles::latest()->get();

        return view('celestial', [
            'articles' => $articles,           
        ]);        

    }
}
