<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'api_degree_france';
    
    //protected $guarded = [];

    protected $fillable = [
        'id',
        'year',
        'month',
        'max_degree',
        'min_degree',
        'average_degree',
    ];

}
