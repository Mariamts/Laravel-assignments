<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getNaruto() 
    {
        return view('naruto')->with("theme", "light")->with("showFooter", false)->with("title", "Naruto");
    }

    public function getSasuke() 
    {
        return view('sasuke')->with("theme", "dark")->with("showFooter", true)->with("title", "Sasuke");
    }

    public function getSakura() 
    {
        return view('sakura')->with("theme", "light")->with("showFooter", false)->with("title", "Sakura");
    }
    
}
