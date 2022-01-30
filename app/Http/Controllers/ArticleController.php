<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index ()
    {

        $articles = [
            'some call post 1',
            'some call post 2',
            'some call post 3',
            'some call post 4',
            'some call post 5',
        ];
    
        return view('blog', compact('articles'));
    }



    public function show()
    {
    return view('single-post');
    }



    
}
