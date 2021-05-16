<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::all();
        return view('admin.prodi.index', ['prodi' => $prodi]);
    }

    public function create_view()
    {
        return view('admin.Prodi.create');
    }

    public function update_view($id)
    {
        $prodi = Prodi::find($id);
        return view('admin.Prodi.update', ['prodi' => $prodi]);
    }

    public function create(Request $req)
    {
        $name = $req->input('name');
        $prodi = new Prodi();

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads'), $filename);
            $prodi->name = $name;
            $prodi->image = $filename;
            $prodi->save();
            return redirect('cms/en/prodi')->with('pesan', 'Course Added');
        } else {
            return redirect('cms/en/prodi')->with('pesan', 'Please Add Image');
        }
    }

    public function update_prodi(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $prodi = Prodi::find($id);

        if ($req->hasFile('image')) {
            $oldFile = asset('uploads/' . $prodi->image);
            $image = $req->file('image');
            if (File::exists($oldFile)) {
                File::delete($oldFile);
            }
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $prodi->name = $name ?? $prodi->name;
            $prodi->image = $filename;
            $prodi->save();
        } else {
            $prodi->name = $name ?? $prodi->name;
            $prodi->save();
        }
        return redirect('/cms/en/prodi')->with('pesan', 'Course Updated');
    }

    public function delete_prodi($id)
    {
        $prodi = Prodi::find($id);
        $oldFile = asset('uploads/' . $prodi->image);
        if (File::exists($oldFile)) {
            File::delete($oldFile);
        }
        $prodi->delete();
        return redirect()->back()->with('pesan', 'Course Deleted');
    }
}
