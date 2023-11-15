<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class HomepageController extends Controller
{
    public function index()
    {
        //récupérer tous les articles
        //$articles = Article::all();
        //récupérer les articles par page
        $articles = Article::paginate(12);

        return view('homepage.index', [
            'articles' => $articles,
        ]);
    }
}
