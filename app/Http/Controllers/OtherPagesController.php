<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class OtherPagesController extends Controller
{
    public function indexTest() 
    {
        return view('test', [
            'articles' => $articles = Articles::latest()->get(),           
        ]);
    }
    
    public function indexCelestial() 
    {
        return view('celestial', [
            'articles' => $articles = Articles::latest()->get(),           
        ]);
    }

    public function indexInnovators() 
    {
        return view('innovators', [
            'articles' => $articles = Articles::latest()->get(),           
        ]);
    }
   
    public function indexEnergy() 
    {
        return view('energy', [
            'articles' => $articles = Articles::latest()->get(),           
        ]);
    }

    public function indexPlanet() 
    {
        return view('planet', [
            'articles' => $articles = Articles::latest()->get(),           
        ]);
    }
}
