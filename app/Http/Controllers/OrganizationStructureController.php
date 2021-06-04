<?php

namespace App\Http\Controllers;

use App\Models\OrganizationStructure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrganizationStructureController extends Controller
{
    //
    public function index()
    {
        $structure = OrganizationStructure::all();
        return view('admin.Organization.index', ["structure" => $structure]);
    }

    public function addStructure(Request $req)
    {
        $image = $req->file('image');
        $filename = time() . "." . $image->getClientOriginalExtension();
        $image->move(public_path('/uploads/structure'), $filename);

        $structure = new OrganizationStructure();
        $structure->image = $filename;
        $structure->save();

        return redirect()->back()->with("pesan", "Structure Added");
    }

    public function delete_structure($id)
    {
        $structure = OrganizationStructure::find($id);
        $oldFile = asset('uploads/structure/' . $structure->image);
        if (File::exists($oldFile)) {
            File::delete($oldFile);
        }
        $structure->delete();
        return redirect()->back()->with('pesan', 'Structure Deleted');
    }
}
