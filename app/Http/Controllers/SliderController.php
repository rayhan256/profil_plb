<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    //
    public function index()
    {
        $slider = Slider::all();
        return view('admin.Slider.index', ['sliders' => $slider]);
    }

    public function addImage(Request $req)
    {
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('slider', $filename, 'public');
            $hasLink = $req->input('hasLink');
            $link = $req->input('link');
            $name = $req->input('imageName');

            $slider = new Slider();
            $slider->filename = $filename;
            $slider->hasLink = $hasLink ? true : false;
            $slider->link = $link ? $link : "no link";
            $slider->name = $name;
            $slider->save();
        }
        return redirect()->back()->with("pesan", "Slider Added");

    }

    public function delete($id)
    {
        $slider = Slider::find($id);
        $path = storage_path('app/public/slider/' . $slider->filename);

        if (File::exists($path)) {
            File::delete($path);
        }
        $slider->delete();

        return redirect()->back()->with("pesan", "Slider Deleted");
    }
}
