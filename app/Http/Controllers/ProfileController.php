<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function register(){
        return view('profile.register');
    }

    public function postregister(Request $request){
        $data = $request->validate([
            'firstname' => 'required|max:25',
            'lastname' => 'required|max:25',
            'email' => 'required|email:dns',
            'role' => 'required',
            'gender' => 'required',
            'picture' => 'required',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|min:8'
        ]);

        $file = $request->file('picture');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        $data['password'] = bcrypt($data['password']);

        return redirect('/login');
    }

    public function login(){
        return view('profile.login');
    }

    public function postlogin(Request $request){
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('error', 'Email atau Password salah');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
