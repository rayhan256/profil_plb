<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CampusController extends Controller
{
    public function index()
    {
        $kampus = Campus::get();
        return view('admin.Campus.index', ['campus' => $kampus]);
    }
    public function create()
    {
        return view('admin.Campus.create');
    }

    public function create_process(Request $req)
    {
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);
        $imageName = time() . '.' . $req->image->getClientOriginalExtension();
        $req->file('image')->storeAs('campus', $imageName, 'public');
        $campus = new Campus;
        $campus->campus_name = $req->input('campus_name');
        $campus->call_centre = $req->input('call_centre');
        $campus->whatsapp = $req->input('whatsapp');
        $campus->email = $req->input('email');
        $campus->desc = $req->input('desc');
        $campus->image = $imageName;
        $campus->hasAB = $req->input('hasAB') ? true : false;
        $campus->hasAK = $req->input('hasAK') ? true : false;
        $campus->hasMI = $req->input('hasMI') ? true : false;
        $campus->hasHUMAS = $req->input('hasHUMAS') ? true : false;
        $campus->embedded_map = $req->input('embedded_map');
        $campus->save();

        return redirect('/cms/en/campus')->with('pesan', 'Kampus Added');

    }

    public function seeCampus($id)
    {
        $campus = Campus::find($id);
        return view('admin.Campus.view', ['campus' => $campus]);
    }

    public function update($id)
    {
        $campus = Campus::find($id);
        return view('admin.Campus.update', ['campus' => $campus]);
    }

    public function update_process(Request $req)
    {
        $id = $req->input('id');
        $campus_name = $req->input('campus_name');
        $call_centre = $req->input('call_centre');
        $whatsapp = $req->input('whatsapp');
        $email = $req->input('email');
        $desc = $req->input('desc');

        $campus = Campus::find($id);
        $filename = storage_path('app/public/campus/' . $campus->image);

        if ($req->hasFile('image')) {
            if (File::exists($filename)) {
                $foto = $req->file('image');
                $newFileName = time() . '.' . $foto->getClientOriginalExtension();
                $req->file('image')->storeAs('campus', $newFileName, 'public');

                $campus->campus_name = $campus_name ? $campus_name : $campus->campus_name;
                $campus->call_centre = $call_centre ? $call_centre : $campus->call_centre;
                $campus->whatsapp = $whatsapp ? $whatsapp : $campus->whatsapp;
                $campus->email = $email ? $email : $campus->email;
                $campus->desc = $desc ? $desc : $campus->desc;
                $campus->image = $newFileName ? $newFileName : $campus->image;
                $campus->hasAB = $req->input('hasAB') ? intval($req->input('hasAB')) : 0;
                $campus->hasAK = $req->input('hasAK') ? intval($req->input('hasAK')) : 0;
                $campus->hasMI = $req->input('hasMI') ? intval($req->input('hasMI')) : 0;
                $campus->hasHUMAS = $req->input('hasHUMAS') ? intval($req->input('hasHUMAS')) : 0;
                $campus->embedded_map = $req->input('embedded_map') ? $req->input('embedded_map') : $campus->embedded_map;
                $campus->save();

                File::delete($filename);
            }
        } else {
            $campus->campus_name = $campus_name ? $campus_name : $campus->campus_name;
            $campus->call_centre = $call_centre ? $call_centre : $campus->call_centre;
            $campus->whatsapp = $whatsapp ? $whatsapp : $campus->whatsapp;
            $campus->email = $email ? $email : $campus->email;
            $campus->desc = $desc ? $desc : $campus->desc;
            $campus->image = $campus->image;
            $campus->hasAB = $req->input('hasAB') ? intval($req->input('hasAB')) : 0;
            $campus->hasAK = $req->input('hasAK') ? intval($req->input('hasAK')) : 0;
            $campus->hasMI = $req->input('hasMI') ? intval($req->input('hasMI')) : 0;
            $campus->hasHUMAS = $req->input('hasHUMAS') ? intval($req->input('hasHUMAS')) : 0;
            $campus->embedded_map = $req->input('embedded_map') ? $req->input('embedded_map') : $campus->embedded_map;
            $campus->save();
        }

        return redirect('/cms/en/campus')->with('pesan', 'Campus Updated');

    }

    public function delete($id)
    {
        $campus = Campus::find($id);
        $path = storage_path('app/public/campus/' . $campus->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $campus->delete();
        return redirect('/cms/en/campus')->with('pesan', 'Campus Deleted');
    }
}
