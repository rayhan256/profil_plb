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
        return view('admin.Prodi.index', ['prodi' => $prodi]);
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
        $akreditasi = $req->input('akreditasi');
        $desc = $req->input('desc');
        $prodi = new Prodi();

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $certificate = $req->file('certificate');
            $certificate_name = "cer-".time().".".$image->getClientOriginalExtension();
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $certificate->move(public_path('/uploads/certificates'), $certificate_name);
            $image->move(public_path('/uploads/prodi'), $filename);
            $prodi->name = $name;
            $prodi->image = $filename;
            $prodi->akreditasi = $akreditasi;
            $prodi->desc = $desc;
            $prodi->certificate = $certificate_name;
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
        $akreditasi = $req->input('akreditasi');
        $desc = $req->input('desc');
        $prodi = Prodi::find($id);

        if ($req->hasFile('certificate')) {
            $oldCertificate = asset('uploads/certificates/'.$prodi->certificate);
            $certificate = $req->file('certificate');
            if (File::exists($oldCertificate)) {
                File::delete($oldCertificate);
            }
            $certificate_name = "cer-".time().".".$certificate->getClientOriginalExtension();
            $certificate->move(public_path("/uploads/certificate"), $certificate_name);
            $prodi->certificate = $certificate_name ?? $prodi->certificate;
        }

        if ($req->hasFile('image')) {
            $oldFile = asset('uploads/prodi/' . $prodi->image);
            $image = $req->file('image');
            if (File::exists($oldFile)) {
                File::delete($oldFile);
            }
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads/prodi"), $filename);
            $prodi->image = $filename ?? $prodi->image;
        } 

            $prodi->name = $name ?? $prodi->name;
            $prodi->akreditasi = $akreditasi ?? $prodi->akreditasi;
            $prodi->desc = $desc ?? $prodi->desc;
            $prodi->save();
        
        return redirect('/cms/en/prodi')->with('pesan', 'Course Updated');
    }

    public function delete_prodi($id)
    {
        $prodi = Prodi::find($id);
        $oldFile = asset('uploads/prodi/' . $prodi->image);
        if (File::exists($oldFile)) {
            File::delete($oldFile);
        }
        $prodi->delete();
        return redirect()->back()->with('pesan', 'Course Deleted');
    }
}
