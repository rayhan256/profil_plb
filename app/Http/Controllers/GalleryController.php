<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    //
    public function index() {
        $galleries = Gallery::all();
        return view('admin.Gallery.index', ['galleries' => $galleries]);
    }

    public function add(Request $req) {
        $file = $req->file('image');
        $name = $req->input('name');
        $galleries = new Gallery();
        if ($file === null) {
            return redirect()->back()->with('error', 'Image Not Added, Please Fill The Image');
        } else {

            $filename = time().".". $file->getClientOriginalExtension();
            $file->move(public_path("/uploads/galleries"), $filename);
            $galleries->image = $filename;
            $galleries->name = $name;
            $galleries->save();
            return redirect()->back()->with('pesan', "Gallery Added");
        }

    }

    public function destroy($id) {
        $galleries = Gallery::find($id);
        $oldPath = public_path("/uploads/galleries/". $galleries->image);

        if (File::exists($oldPath)) {
            File::delete($oldPath);
        }

        $galleries->delete();
        return redirect()->back()->with('pesan', 'Gallery Deleted');
    } 
}
