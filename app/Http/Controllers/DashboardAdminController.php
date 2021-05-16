<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Visitor;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $article = Article::count();
        $visitor = Visitor::count();
        return view('admin.index', ['count_article' => $article, 'count_visitor' => $visitor]);
    }
}
