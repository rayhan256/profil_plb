<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function createUser(Request $req)
    {
        $data = $req->all();
        User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'adress' => $data['adress'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);

        return redirect('/cms/en');
    }

    public function profile()
    {
        $admin = auth()->user();
        return view('admin.Profile.index', ['admin' => $admin]);
    }

    public function updateProfile(Request $req)
    {
        $id = $req->input('id');
        $firstname = $req->input('firstname');
        $lastname = $req->input('lastname');
        $address = $req->input('address');
        $image = $req->file('image');

        $admin = User::find($id);
        $oldFile = storage_path('app/public/profile/' . $admin->profile_pic);
        if ($req->hasFile('image')) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('profile', $filename, 'public');

            $admin->firstname = $firstname ? $firstname : $admin->firstname;
            $admin->lastname = $lastname ? $lastname : $admin->lastname;
            $admin->adress = $address ? $address : $admin->adress;
            $admin->profile_pic = $filename;

            if (File::exists($oldFile)) {
                File::delete($oldFile);
            }
            $admin->save();
        } else {
            $admin->firstname = $firstname ? $firstname : $admin->firstname;
            $admin->lastname = $lastname ? $lastname : $admin->lastname;
            $admin->adress = $address ? $address : $admin->adress;
            $admin->profile_pic = $admin->profile_pic;
            $admin->save();
        }
        return redirect()->back()->with('pesan', 'Profile Updated');
    }
}
