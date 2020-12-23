<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function verify(Request $req) {

        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();

        if($user!=null){
            $req->session()->put('username', $user['username']);
            $req->session()->put('type', $user['type']);

            return redirect()->route('home.index');
        }else{
            $req->session()->flash('error', 'Invalid Username or Password');
            return redirect()->route('login.index');
        }
    }
}
