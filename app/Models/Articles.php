<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'articles';

    public function user() {

        return $this->belongsTo(User::class, 'user_id');
    }

}
