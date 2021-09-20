<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class EnergyController extends Controller
{
    public function index() {
        
        $articles = Articles::latest()->get();

        return view('renewable-energy', [
            'articles' => $articles,           
        ]);

    }
}
