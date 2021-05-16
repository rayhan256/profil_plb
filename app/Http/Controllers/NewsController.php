<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
 public function index() {
   		return view('admin.Articles.index');
    }  
      public function create() {
        return view('admin.Articles.create');
    }

    public function update() {
        return view('admin.Articles.update');
    }
}
