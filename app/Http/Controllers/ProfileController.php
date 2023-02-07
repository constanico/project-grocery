<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function register(){
        return view('profile.register');
    }

    public function postregister(Request $request){
        $request->validate([
            'firstname' => 'required|alpha|max:25',
            'lastname' => 'required|alpha|max:25',
            'email' => 'required|email:dns',
            'role' => 'required',
            'gender' => 'required',
            'picture' => 'required',
            'password' => ['required', 'confirmed', Password::min(8)->numbers()],
        ]);

        $file = $request->file('picture');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        DB::table('users')->insert([
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'role' => $request->role,
                'gender' => $request->gender,
                'picture' => $imageName,
                'password' => bcrypt($request->password),
            ]
        ]);

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

    public function profile(){
        return view('profile.profile');
    }

    public function save() {


        return view('profile.saved');
    }

    public function maintenance() {
        return view('profile.maintenance', [
            'user' => User::latest()
        ]);
    }
}
