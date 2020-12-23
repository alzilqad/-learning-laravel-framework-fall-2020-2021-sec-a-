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
}
