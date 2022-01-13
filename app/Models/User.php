<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile() {
        /**
         * Les requetes sql peuvent etres passees a partir d'ici?
         * 
         * Trouver un moyen de renvoyer les donnees d'un seul utilisateur en fonction de son id ou article 
         */
        //return DB::table('users')->where('name');

        // $ids = $this->follows()->pluck('id');
        // $ids->push($this->id);

        //return Articles::whereIn('user_id', $id)->orderByDesc('id')->paginate(30); 
        
    } 

    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }

    public function article() {
        return $this->hasMany(Articles::class);
    }
    
}

