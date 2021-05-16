<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $article = Article::get();
        return view('admin.Articles.index', ['articles' => $article]);
    }

    public function create()
    {
        return view('admin.Articles.create');
    }

    public function insert(Request $req)
    {
        $title = $req->input('title');
        $date = $req->input('date');
        $desc = $req->input('desc');
        $author = $req->input('author');
        $image = $req->file('image');

        if ($req->hasFile('image')) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('articles', $filename, 'public');

            $article = new Article;
            $article->title = $title;
            $article->date = $date;
            $article->desc = $desc;
            $article->author = $author;
            $article->image = $filename;

            $article->save();
        }
        return redirect('/cms/en/articles')->with('pesan', 'Article Saved');
    }

    public function view($id)
    {
        $article = Article::find($id);
        return view('admin.Articles.view', ['article' => $article]);
    }

    public function update($id)
    {
        $article = Article::find($id);
        return view('admin.Articles.update', ['article' => $article]);
    }

    public function update_process(Request $req)
    {
        $id = $req->input('id');
        $title = $req->input('title');
        $date = $req->input('date');
        $desc = $req->input('desc');
        $author = $req->input('author');
        $image = $req->file('image');

        $article = Article::find($id);
        $oldFile = storage_path('app/public/articles/' . $article->image);

        if ($req->hasFile('image')) {

            if (File::exists($oldFile)) {
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('articles', $filename, 'public');
                $article->title = $title ? $title : $article->title;
                $article->date = $date ? $date : $article->date;
                $article->desc = $desc ? $desc : $article->desc;
                $article->author = $author ? $author : $article->author;
                $article->image = $filename;
                $article->save();
                File::delete($oldFile);

            }

        } else {
            $article->title = $title ? $title : $article->title;
            $article->date = $date ? $date : $article->date;
            $article->desc = $desc ? $desc : $article->desc;
            $article->author = $author ? $author : $article->author;
            $article->image = $article->image;
            $article->save();
        }
        return redirect('/cms/en/articles')->with('pesan', 'Article Updated');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $file = storage_path('app/public/articles/' . $article->image);
        if (File::exists($file)) {
            File::delete($file);

        }
        $article->delete();
        return redirect('/cms/en/articles')->with('pesan', 'Article Deleted');
    }
}
