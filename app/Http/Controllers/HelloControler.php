<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloControler extends Controller
{
    function index(string $name){
        return view('hello', [
            'name'=> $name
        ]);
    }
}
