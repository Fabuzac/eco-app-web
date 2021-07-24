<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Innovators;

class TestController extends Controller
{
    public function index() {

        return view('/test', [
                    
        ]);
    }
}
