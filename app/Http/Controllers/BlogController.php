<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function home(){
        return view('tes');        
        return view('home');        
    }
    public function kontak(){
        return view('kontak');        
    }
    public function tentang(){
        return view('tentang');            
    }
}
