<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
     
        public function index(Request $request)
    {
        $articles = Article::paginate(10); // Par défaut 10 par page
        return response()->json($articles);
    }
  
}
