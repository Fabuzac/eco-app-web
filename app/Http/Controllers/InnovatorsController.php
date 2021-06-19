<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Innovators;

class InnovatorsController extends Controller
{
    public function index() {

        return view('/innovators', [
                    
        ]);
    }
}
