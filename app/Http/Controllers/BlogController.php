<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blog = Blog::get();
        return view('admin.Blogs.index', ['blogs' => $blog]);
    }

    public function create()
    {
        return view('admin.Blogs.create');
    }

    public function insert(Request $req)
    {
        $title = $req->input('title');
        $date = $req->input('date');
        $desc = $req->input('desc');
        $author = $req->input('author');
        $category = $req->input('category');

        $image = $req->file('image');
        $blog = new Blog;

        if ($req->hasFile('image')) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('blogs', $filename, 'public');

            $blog->title = $title ?? "Tidak Ada Judul";
            $blog->date = $date ?? date('Y-m-d');
            $blog->desc = $desc ?? "Tidak Ada Desc";
            $blog->author = $author ?? "LP3I";
            $blog->category = $category ?? "Marketing";
            $blog->image = $filename;

            $blog->save();
        }

        return redirect('/cms/en/blogs')->with('pesan', 'Blogs Added');
    }

    public function viewBlog($id)
    {
        $blog = Blog::find($id);
        return view('admin.Blogs.view', ['blog' => $blog]);
    }

    public function update($id)
    {
        $blog = Blog::find($id);
        return view('admin.Blogs.update', ['blog' => $blog]);
    }

    public function update_process(Request $req)
    {
        $id = $req->input('id');
        $title = $req->input('title');
        $date = $req->input('date');
        $desc = $req->input('desc');
        $author = $req->input('author');
        $category = $req->input('category');
        $image = $req->file('image');

        $blog = Blog::find($id);
        $oldFIle = storage_path('app/public/blogs/' . $blog->image);

        if ($req->hasFile('image')) {
            if (File::exists($oldFIle)) {
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('blogs', $filename, 'public');

                $blog->title = $title ? $title : $blog->title;
                $blog->date = $date ? $date : $blog->date;
                $blog->desc = $desc ? $desc : $blog->desc;
                $blog->author = $author ? $author : $blog->author;
                $blog->category = $category ? $category : $blog->category;
                $blog->image = $filename;

                $blog->save();
                File::delete($oldFIle);
            }
        } else {
            $blog->title = $title ? $title : $blog->title;
            $blog->date = $date ? $date : $blog->date;
            $blog->desc = $desc ? $desc : $blog->desc;
            $blog->author = $author ? $author : $blog->author;
            $blog->category = $category ? $category : $blog->category;
            $blog->image = $blog->image;
            $blog->save();
        }

        return redirect('/cms/en/blogs/view/' . $id)->with('pesan', 'Blog Updated');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $file = storage_path('app/public/blogs/' . $blog->image);
        if (File::exists($file)) {
            File::delete($file);

            $blog->delete();
        }

        return redirect('/cms/en/blogs')->with('pesan', 'Blog Deleted');
    }
}
