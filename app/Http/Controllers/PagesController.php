<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        $title = 'Hlavní strana';
        return view('pages.index')->with('title', $title );
    }
    public function login(){
        return 'lolec';
    }
}
