<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testi = Testimonial::get();
        return view('admin.Testimonial.index', ['testimonial' => $testi]);
    }
    public function create()
    {
        return view('admin.Testimonial.create');
    }

    public function insert(Request $req)
    {
        $title = $req->input('title');
        $name = $req->input('name');
        $desc = $req->input('desc');
        $image = $req->file('image');
        $position = $req->input('position');

        $testi = new Testimonial();

        if ($req->hasFile('image')) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('testimonial', $filename, 'public');

            $testi->title = $title;
            $testi->name = $name;
            $testi->desc = $desc;
            $testi->image = $filename;
            $testi->position = $position;
            $testi->save();

            return redirect('/cms/en/testimonial')->with('pesan', 'Testimonial Created');
        }
    }

    public function update($id)
    {
        $testi = Testimonial::find($id);
        return view('admin.Testimonial.update', ['testi' => $testi]);
    }

    public function update_process(Request $req)
    {
        $id = $req->input('id');
        $title = $req->input('title');
        $name = $req->input('name');
        $desc = $req->input('desc');
        $image = $req->file('image');
        $position = $req->input('position');

        $testi = Testimonial::find($id);
        $oldFile = storage_path('app/public/testimonial/' . $testi->image);

        if ($req->hasFile('image')) {
            if (File::exists($oldFile)) {
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('testimonial', $filename, 'public');

                $testi->title = $title ? $title : $testi->title;
                $testi->name = $name ? $name : $testi->name;
                $testi->desc = $desc ? $desc : $testi->desc;
                $testi->image = $filename;
                $testi->position = $position ? $position : $testi->position;
                $testi->save();
                File::delete($oldFile);
            }
        } else {
            $testi->title = $title ? $title : $testi->title;
            $testi->name = $name ? $name : $testi->name;
            $testi->desc = $desc ? $desc : $testi->desc;
            $testi->image = $testi->image;
            $testi->position = $position ? $position : $testi->position;
            $testi->save();
        }

        return redirect('/cms/en/testimonial')->with('pesan', 'Testimonial Updated');
    }

    public function delete($id)
    {
        $testi = Testimonial::find($id);
        $filename = storage_path('app/public/testimonial/' . $testi->image);
        if (File::exists($filename)) {
            File::delete($filename);
            $testi->delete();
        }

        return redirect('/cms/en/testimonial')->with('pesan', 'Testimony Deleted');
    }
}
