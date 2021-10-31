<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'articles';

    // public function article() {
    //     $articles = DB::table('articles')
    //                 ->orderBy('id', 'desc')
    //                 ->get();
    // }

    protected $fillable = [
        'title',
        'summary',
        'body',
        'created_at',
        'updated_at',
    ];

    public function user() {

        return $this->belongsTo(User::class, 'user_id');
    }

}
