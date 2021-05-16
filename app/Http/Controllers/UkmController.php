<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UkmController extends Controller
{
    //

    public function index()
    {
        $ukm = Ukm::all();
        return view('admin.Ukm.index', ['ukm' => $ukm]);
    }

    public function create_view()
    {
        return view('admin.Ukm.create');
    }

    public function post_ukm(Request $req)
    {
        $name = $req->input('name');
        $desc = $req->input('desc');
        $ukm = new Ukm();

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads'), $filename);
            $ukm->name = $name;
            $ukm->desc = $desc;
            $ukm->image = $filename;
            $ukm->save();
            return redirect('/cms/en/ukm')->with('pesan', 'Ukm Added');
        } else {
            return redirect('/cms/en/ukm')->with('pesan', 'Something When Wrong, Image Should Be Filled');
        }
    }

    public function update_view($id)
    {
        $ukm = Ukm::find($id);
        return view('admin.Ukm.update', ['ukm' => $ukm]);
    }

    public function update_ukm(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $desc = $req->input('desc');
        $ukm = Ukm::find($id);

        if ($req->hasFile('image')) {
            $oldFIle = asset('uploads/' . $ukm->image);
            $image = $req->file('image');
            if (File::exists($oldFIle)) {
                File::delete($oldFIle);
            }
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads'), $filename);
            $ukm->name = $name ?? $ukm->name;
            $ukm->desc = $desc ?? $ukm->desc;
            $ukm->image = $filename;
        } else {
            $ukm->name = $name ?? $ukm->name;
            $ukm->desc = $desc ?? $ukm->desc;
        }

        $ukm->save();
        return redirect('/cms/en/ukm')->with('pesan', 'UKM Updated');
    }

    public function delete_ukm($id)
    {
        $ukm = Ukm::find($id);
        $oldFIle = asset('uploads/' . $ukm->image);
        if (File::exists($oldFIle)) {
            File::delete($oldFIle);
        }

        $ukm->delete();
        return redirect()->back()->with("pesan", "UKM Deleted");
    }
}
