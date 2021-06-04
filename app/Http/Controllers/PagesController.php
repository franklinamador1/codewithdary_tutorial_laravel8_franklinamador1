<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
public function index()
    {
        return view('index');
    }

    public function about()
    {
        //$name = "Frank";
        //return view('about')->with('name', $name);

        $names=['John', 'Michael', 'David', 'Jessica'];
        return view('about', [
            'names' => $names
        ]);
    }
}
