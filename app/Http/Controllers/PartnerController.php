<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    //

    public function index()
    {
        $partner = Partner::all();
        return view('admin.Partner.index', ['partner' => $partner]);
    }

    public function addPartner(Request $req)
    {
        $name = $req->input('name');
        $desc = $req->input('desc');
        $partner = new Partner();
        if ($req->hasFile('image')) {
            $logo = $req->file('image');
            $filename = time() . '.' . $logo->getClientOriginalExtension();
            $logo->storeAs('partner', $filename, 'public');
            $partner->name = $name;
            $partner->desc = $desc;
            $partner->logo = $filename;
        }

        $partner->name = $name;
        $partner->desc = $desc;
        $partner->save();
        return redirect()->back()->with("pesan", "Partner Added");
    }

    public function deletePartner($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->back()->with("pesan", "Partner Deleted");
    }
}
