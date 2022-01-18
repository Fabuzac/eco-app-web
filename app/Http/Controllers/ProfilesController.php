<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTimeInterface;
use App\Models\Articles;
use Illuminate\Support\Facades\Auth;


class ProfilesController extends Controller
{
    public function index() {
        $articles = Articles::latest()->get();
        $users = User::get();

        return view('myProfile', [
            'articles' => $articles,         
            'user' => $users,         
        ]);
    }

    public function show(User $user) {
        
        $articles = Articles::latest()->get();

        return view('profiles.show', [
            'user' => $user,
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