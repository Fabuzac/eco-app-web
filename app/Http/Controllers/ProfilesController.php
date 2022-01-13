<?php

namespace App\Http\Controllers;

use DateTimeInterface;
use App\Models\Articles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index() {
        $articles = Articles::latest()->get();
        $users = User::get();

        return view('profile', [
            'articles' => $articles,         
            'user' => $users,         
        ]);
    }


    public function show() {
        
        $articles = Articles::latest()->get();
        $users = User::get();

        //dd($users[1]->id . " user -> id", $articles[0]->user_id . " article -> user_id");
        
        // for ($i=0; $i < 10 ; $i++) { 
        //     if ($users[$i]->id === $articles[$i]->user_id) {
        //         return "ok";
        //     }
        // }

        // return view('profile')
        //         ->with('user', $users)
        //         ->with('articles', $articles);  
        
        return view('profile', [
            'user' => $users,
            'articles' => $articles, 
        ]);     
    }
        

    public function serializeDate(DateTimeInterface $date) {
        /**
         * Prepare a date for array / JSON serialization.
         * 
         * @param \DatetimeInterface $date
         * @return string
         */

        //$date = Auth::user()->created_at;

        return $date->format('d-m-Y');
        
        // Auth::user()->created_at
    }
    
}
