<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class homeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function userlist()
    {
        $users  = User::all();
        return view('employeer.userlist', compact('users'));
    }

    public function detail($id)
    {
        $user = User::find($id);
        return view('employeer.detail', compact('user'));
    }

    public function search(Request $req)
    {
        $term = $req->input;
        $users= User::where('name', 'LIKE', '%' . $term . '%')
                        ->get();
        return view('employeer.userlist', compact('users'));
    }

    public function create()
    {
        return view('employeer.create');
    }

    public function verifyCreate(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'contact' => 'required',
            'companyName' => 'required'
        ]);

        $user = new User();

        $user->name = $req->name;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->contact = $req->contact;
        $user->companyName = $req->companyName;

        if ($user->save()) {
            return redirect()->route('user.userlist');
        } else {
            return back();
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('employeer.edit', compact('user'));
    }

    public function verifyEdit($id, Request $req)
    {
        $req->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'contact' => 'required',
            'companyName' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $req->name;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->contact = $req->contact;
        $user->companyName = $req->companyName;

        if ($user->save()) {
            return redirect()->route('user.userlist');
        } else {
            return back();
        }
    }


    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.userlist');
    }
}
