<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class enController extends Controller
{
    public function en(){
        return view('index-eng');
    }
}
