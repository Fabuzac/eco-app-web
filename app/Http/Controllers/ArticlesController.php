<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ArticlesController extends Controller
{

    public function create(Articles $articles)
    {
        return view('articles.create', [
            'article' => $articles, // middle page, one article
            'articles' => $article = Articles::latest()->orderBy('id', 'desc')->get() //aside articles, several articles     
        ]);
    }

    public function store() 
    {        
        // Prevoir validation avec $request

        $article = new Articles(request(['title', 'summary', 'body']));
        $article->user_id = auth()->id();
        $article->save();

        // Article::create([
        //     'title' => $request->input('title'),
        //     'subtitle' => $request->input('subtitle'),
        //     'content' => $request->input('content'),
        // ]);

        return redirect()->route('articles');
    }


    public function edit(User $user, Articles $articles) 
    {

        return view('articles.edit', [
            'article' => $articles,
            'articles' => $article = Articles::latest()->orderBy('id', 'desc')->get(),  
            'user' => $user,
        ]);
    }

    public function update() 
    {
        /**
         * 
         * $article->title = $request->input('title');
         * $article->subtitle = $request->input('subtitle');
         * $article->content = $request->input('content');
         * $article->save();
        */
    }

    public function destroy(Articles $articles) 
    {

        $articles->delete();
        $uri = route('articles');
        return redirect($uri);

        
    }
}
