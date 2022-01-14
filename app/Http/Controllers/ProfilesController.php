<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\User;
use DateTimeInterface;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        //$user = User::get('name');
        
        //$user = User::get();
        
        //dd($user);

        return view('profiles.show', [
            'user' => $user,
            'articles' => $articles, 
        ]);
        
        

        // find user by article.id
        // find corespondance article.id dans user id = user name etc..        

        // return $this->belongsTo(User::class, 'user_id');

        //dd($users[1]->id . " user -> id", $articles[0]->user_id . " article -> user_id");
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

// $articleId in parameter
// $sql = "SELECT
//             articles.id as articles_id, 
//             articles.user_id,
//             articles.title,
//             articles.summary,
//             articles.body,
//             articles.created_at,
//             articles.updated_at,
//             users.name,
//             users.email,
//             users.created_at

//         FROM articles

//         INNER JOIN users ON user_id = users.id
//         WHERE articles.id = ?";
